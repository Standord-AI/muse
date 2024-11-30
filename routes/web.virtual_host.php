<?php

use Kaviru\MuseCore\Route;
use App\Controllers\PublicController;
use App\Controllers\PostController;


/*  ----------------------------------

    Enter the application routes here.

    ----------------------------------  */

# Virtual-host based

Route::name('/', 'home');
Route::name('contact', 'contact-us');
Route::name('posts/{id}', 'posts.index');
Route::name('posts/{title}/{id}', 'posts.show');

Route::get('/', PublicController::class, 'index');
Route::get('contact', PublicController::class, 'contact');
Route::get('posts/{id}', PostController::class, 'indexPost');
Route::get('posts/{title}/{id}', PostController::class, 'showPost');
