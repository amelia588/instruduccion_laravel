<?php

use Illuminate\Support\Facades\Route;

// Home page route
Route::get('/', function () {
    return view('home'); 
});

// Blog page route
Route::get('/blog', function () {
    $posts = [  // Corrected array syntax
        ['id' => 1, 'title' => 'PHP', 'slug' => 'php'],
        ['id' => 2, 'title' => 'Laravel', 'slug' => 'laravel'],
        ['id' => 3, 'title' => 'PHP', 'slug' => 'php'],
    ];
    return view('blog', ['posts' => $posts]); 
});

// Single post page route
Route::get('blog/{slug}', function ($slug) {
    $post = ['slug' => $slug]; 
    return view('post', ['post' => $post]); 
});



