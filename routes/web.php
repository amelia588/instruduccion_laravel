<?php

use Illuminate\Support\Facades\Route;

// Home page route
Route::get('/', function () {
    return view('home'); 
})->name('home');

// Blog page route
Route::get('/blog', function () {
    $posts = [
        ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
        ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel'],
        ['id' => 3, 'title' => 'PHP', 'slug' => 'php'],
    ];
    return view('blog', ['posts' => $posts]); 
})->name('blog');

// Single post page route
Route::get('blog/{slug}', function ($slug) {
    $post = ['slug' => $slug];
    return view('post', ['post' => $post]); 
})->name('post');




