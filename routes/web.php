<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/index', function () {
    return view('welcome');
});

Route::get('/post', function () {
    return view('postagem');
});

//Controlador de posts
Route::get('/editposts', [PostController::class, 'editPosts'])->middleware('auth');
Route::get('/projects', [PostController::class, 'returnProjects'])->name('projects');
Route::middleware(['auth'])->group(function () {
    Route::post('/post/newpost', [PostController::class, 'newPost'])->name('profile.newproject');
    Route::delete('/post/deletepost/{postid}', [PostController::class, 'deletePost']);
    Route::get('/updatepost/{postid}', [PostController::class, 'updatePostPage']);

});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
