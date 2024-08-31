<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

// Route for just only Testing Purpose
Route::get('/test', function() {
    return view('Pages.testing');
});

// Routes for the Frontal WebPage Only
Route::get('/', [Controller::class, 'index'] )->name('index');

Route::get('/about', [Controller::class, 'about'])->name('about');

Route::get('/services', [Controller::class, 'services']);

Route::get('/blog', [Controller::class, 'blog']);

Route::get('/contact', [Controller::class, 'contact']);

Route::get('/blog-details', [Controller::class, 'blogs_info']);

Route::get('/elements', [Controller::class, 'elements']);