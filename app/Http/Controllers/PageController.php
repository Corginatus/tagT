<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class PageController extends Controller
{
    public function index(Request $request)
    {
        $lang = $request->cookie('lang') ?? 'ru';

        return view($lang . '.index', ['lang' => $lang]);
    }

    public function language(Request $request)
    {
        $lang = $request->cookie('lang');

        if ($lang == "ru") {
            $cookie = cookie('lang', 'en', 3600*3600*3600);
        } else {
            $cookie = cookie('lang', 'ru', 3600*3600*3600);
        }

        return redirect('/')->withCookie($cookie);
    }

    public function casePage(int $id)
    {

    }
}
