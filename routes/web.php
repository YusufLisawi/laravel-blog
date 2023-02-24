<?php

use App\Http\Controllers\PostController;
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
    return view('welcome');
});

Route::get('/posts', PostController::class)->name('posts.index');
Route::get('/posts/create', [PostController::class, 'createPost'])->name('posts.create');
Route::get('/posts/{post}', [PostController::class, 'showPost'])->name('posts.show');
