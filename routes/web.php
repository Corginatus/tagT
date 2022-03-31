<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/language', [PageController::class, 'language'])->name('language');
Route::get('/case/{id}', function ($id) {
    $case = \App\Models\Post::find(1);
    return view('ru.case', ['lang' => 'ru', 'case' => $case]);
});
