<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $posts = \App\Models\Post::with(['sections', 'user'])->get();
    return view('welcome', compact('posts'));
});

Route::get('/posts/{post}', function ($post) {
    $post = \App\Models\Post::with(['sections', 'user'])->find($post);
    return view('pages.post.post_detail', compact('post'));
})->name('post_detail_page');
