<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('welcome');
});

Route::get('/post', function () {
    return view('postagem');
});


Route::get('/projects', function () {
    return view('projects');
});

Route::get('/projects', [PostController::class, 'returnProjects']);

Route::middleware(['auth'])->group(function () {
    Route::post('/post/newpost', [PostController::class, 'newPost'])->name('profile.newproject');
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
