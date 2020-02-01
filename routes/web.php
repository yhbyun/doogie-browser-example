<?php

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
    $posts = App\Post::oldest()->get();
    return view('welcome', compact('posts'));
});

Route::get('posts/{post}', function (App\Post $post) {
    $prev = App\Post::where('id', '<', $post->id)->orderBy('id', 'desc')->first();
    $next = App\Post::where('id', '>', $post->id)->orderBy('id')->first();

    return view('post', compact('post', 'prev', 'next'));
});

Route::get('/img/{path}', 'ImageController@show')->where('path', '.*');
