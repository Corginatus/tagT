<?php

namespace App\Http\Controllers;

use App\Exceptions\IncorrectData;
use App\Models\User;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * @throws IncorrectData
     * @throws AuthenticationException
     */
    public function login(Request $request) {
        $validated = $this->validate($request, [
            'email' => ['email', 'required'],
            'password' => ['string', 'required'],
        ]);

        $user = User::where('email', $validated['email'])->first();
        if ($user && Auth::attempt(['email' => $validated['email'], 'password' => $validated['password']])) {
            $app_name = $request->header('appName');
            $token = $user->createToken($app_name)->plainTextToken;
            return response(['token' => $token]);
        }

        if (is_null($user)) {
            throw new IncorrectData();
        }
        throw new AuthenticationException();
    }
}
