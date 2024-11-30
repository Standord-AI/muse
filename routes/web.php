<?php

use Kaviru\MuseCore\Route;
use App\Controllers\AdminController;
use App\Controllers\PublicController;
use App\Controllers\PostController;


/*  ----------------------------------

    Enter the application routes here.

    ----------------------------------  */

# xamp based

Route::name('muse', 'home');
Route::name('muse/{id}', 'abc');
Route::name('muse/contact', 'contact-us');
Route::name('muse/admin/login', 'admin.login');
Route::name('muse/admin/signup', 'admin.signup');

Route::get('muse/', PublicController::class, 'index');
Route::get('muse/{id}', AdminController::class, 'abc');
Route::get('muse/admin/login', AdminController::class, 'loginGet');
Route::post('muse/admin/login', AdminController::class, 'loginPost');

Route::get('muse/admin/signup', AdminController::class, 'signupGet');
Route::post('muse/admin/signup', AdminController::class, 'signupPost');
