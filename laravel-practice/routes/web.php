<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ContentController;
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

Route::get('/', [ContentController::class, 'content'])->name('content.index');
// Route::get('/post/{id}', [PostsController::class, 'show'])->name('post.show');
Route::get('/posts/{slug}', [PostsController::class, 'show'])->name('posts.show');

// Route::view('/', 'layouts.app');

//Route::get('/random-photo', [PhotoController::class, 'redirectToRandomPhoto']);
