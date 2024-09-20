<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegestrationUser;
use App\Http\Controllers\sessionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('posts', [PostsController::class,'index']);

Route::get('posts/create-post-form', [PostsController::class,'createPostForm'])->middleware('auth');

Route::post('posts/create-post', [PostsController::class,'create']);

Route::get('posts/{id}/edit-post', [PostsController::class,'editForm']);


Route::get('edite-post', [PostsController::class,'updatePost']);

Route::get('/posts/{id}', [PostsController::class,'currentPost']);


Route::get('/register', [RegestrationUser::class,'register']);
Route::post('/create-user', [RegestrationUser::class,'registerUser']);

Route::get('/login-form', [sessionController::class,'login']);
Route::post('/login', [sessionController::class,'store']);
Route::get('/logout', [sessionController::class,'destroy']);

