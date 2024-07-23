<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/index', function () {
    return view('welcome');
});

//páginas publicas
Route::get('/projects', [PostController::class, 'returnProjects'])->name('projects');
Route::get('/about', function () { return view('about'); } )->name('about');
Route::get('/', [PostController::class, 'returnIndex'])->name('home');
Route::get('/aboutus', [PostController::class, 'returnTeam'])->name('team');
Route::get('/projects/{postid}',[PostController::class, 'showSinglePost'])->name('showproject');


//Controlador de atividades
Route::middleware(['auth'])->group(function (){
    Route::get('/activity/registeractivity', function () { return view('createactivity'); })->name('activity.registeractivity');
    Route::get('/activity/managment', [PostController::class, 'activityManagment'])->name('activity.managment');
    Route::post('/activity/newactivity', [PostController::class, 'createActivity'])->name('activity.create');
    Route::delete('/activity/deleteactivity/{activityid}', [PostController::class, 'deleteActivity'])->name('activity.delete');
});

//Controlador de equipe
Route::middleware(['auth'])->group(function () {
    Route::get('/team/registerpartner', function () { return view('createpartner'); })->name('team.pagepartner');
    Route::get('/team/management', [PostController::class, 'teamManagement'])->name('team.management');
    Route::delete('/team/deletepartner', [PostController::class, 'deletePartner'])->name('team.delete');
    Route::post('/team/newpartner', [PostController::class, 'createPartner'])->name('team.createpartner');
});

//Controlador de projetos
Route::middleware(['auth'])->group(function () {
    //get
    Route::get('/post/editposts/{postid}', [PostController::class, 'editPosts'])->name('project.editPosts');
    Route::get('/post/addproject', function () {
        return view('postagem');
    })->name('project.addproject');
    //post
    Route::post('/post/newpost', [PostController::class, 'newPost'])->name('project.newpost');
    //delete
    Route::delete('/post/deletepost/{postid}', [PostController::class, 'deletePost'])->name('project.delete');
    //put
    Route::put('/updatepost/put',[PostController::class, 'updatePost'])->name('project.updatePost');
});

//Rota de admnistração
Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [PostController::class, 'adminManage'])->name('admin.home');
    Route::get('/admin/newdata', function () { return view('newproject'); } )->name('admin.newproject');
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
