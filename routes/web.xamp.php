<?php

use Core\Route;
use App\Controllers\PublicController;
use App\Controllers\PostController;


/*  ----------------------------------

    Enter the application routes here.

    ----------------------------------  */

# xamp based

Route::name('muse', 'home');
Route::name('muse/contact', 'contact-us');
Route::name('muse/posts/{id}', 'posts.index');
Route::name('muse/posts/{title}/{id}', 'posts.show');

Route::get('muse/', PublicController::class, 'index');
Route::get('muse/contact', PublicController::class, 'contact');
Route::get('muse/posts/{id}', PostController::class, 'indexPost');
Route::get('muse/posts/{title}/{id}', PostController::class, 'showPost');
