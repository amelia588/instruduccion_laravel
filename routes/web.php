<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return ('Routa home');
});
Route::get('/blog', function () {
    return ('listado de publicaciones');
});
Route::get('blog/{slug}', function ($slug) {
    return $slug;
});
Route::get('buscar', function (Request $request) {
    return $request->all();
});

