<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Route;

Route::get('/posts',[PostController::class,'index'] );
Route::get('/posts/post/{post}',[PostController::class,'show'])->name('post.show');
Route::get('/posts/addpost',[PostController::class,'form'])->name('post.form');
Route::get('/posts/{post}/edit',[PostController::class,'editForm']);
Route::post('/posts/{post}/comments',[CommentController::class,'store']);
Route::post('/posts/store',[PostController::class,'store']);
Route::delete('/posts/{post}/delete',[PostController::class,'destroy']);
Route::put('/posts/{post}/update',[PostController::class,'update']);