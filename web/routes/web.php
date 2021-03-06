<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::resource('/tweet','App\Http\Controllers\TweetsController',['except' => ['edit','update']]);
Route::resource('/profile','App\Http\Controllers\ProfilesController',['except' => ['create','edit']]);
Route::resource('/tweet/like','App\Http\Controllers\LikesController',['only' => ['store','destroy','show']]);
Route::resource('/tweet/comment','App\Http\Controllers\CommentsController',['only' => ['store','destroy']]);
Route::resource('/icon','App\Http\Controllers\IconsController',['only' => ['index','store','destroy']]);
Route::resource('/hashtag','App\Http\Controllers\HashtagsController',['only' => ['show']]);