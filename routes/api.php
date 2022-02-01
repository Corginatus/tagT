<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UploadController;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Longman\TelegramBot\Telegram;
use Telegram\Bot\Api;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::resource('/posts', PostController::class);
    Route::get('/posts/{id}', [PostController::class, 'show']);
    Route::post('/posts/{id}', [PostController::class, 'update']);

//    Route::get('/data', [AdminController::class, 'getData']);
    Route::post('/upload', [UploadController::class, 'upload']);
});

Route::get('/data/posts', function (Request $request) {
    $coins = Post::all();
    return view('card', ['posts' => $coins]);
});


Route::get('/data/posts/{id}', function (Request $request, $id) {
    $post = Post::find($id);
    return response($post);
});

Route::any('/webhook/5276225450:AAEyY-wK7cr7-MMiV38YrIyvz-jMJgKBVNM', function (Request $request) {
    $bot_api_key  = '5276225450:AAEyY-wK7cr7-MMiV38YrIyvz-jMJgKBVNM';

    $bot = new Api($bot_api_key);
    $bot->sendMessage([
        'chat_id' => '822603467',
        'text' => 'new user'
    ]);
});
