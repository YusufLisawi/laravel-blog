<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return redirect('/');
});
Route::get('/lang-switch/{locale}', function ($locale) {
    if (in_array($locale, ['es', 'fr', 'en', 'ar'])) {
        session()->put('locale', $locale);
    }
    return redirect()->back();
})->name('lang-switch');

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/posts', [PostController::class, 'index'])
    ->middleware(['auth', 'verified'])->name('posts.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Posts
    Route::delete('/posts/delete/{post}', [PostController::class, 'deletePost'])->name('posts.delete');
    Route::post('/posts/store', [PostController::class, 'storePost'])->name('posts.store');
    Route::put('/posts/update/{post}', [PostController::class, 'updatePost'])->name('posts.update');
    Route::get('/posts/edit/{post}', [PostController::class, 'editPost'])->name('posts.edit');
    Route::get('/posts/create', [PostController::class, 'createPost'])->name('posts.create');
    Route::get('/posts/{post}', [PostController::class, 'showPost'])->name('posts.show');
});

require __DIR__ . '/auth.php';
