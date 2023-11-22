<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostsController;
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
    //dd("Reached the root route");
   return view('layout');
});

Route::get('/posts/{post}', [PostsController::class, 'show']);

//Route::get('/random-photo', [PhotoController::class, 'redirectToRandomPhoto']);
