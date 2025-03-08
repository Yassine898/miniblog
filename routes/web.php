<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Route;
#GET Routes:
Route::get('/posts',[PostController::class,'index'] );
Route::get('/posts/post/{post}',[PostController::class,'show'])->name('post.show');
Route::get('/posts/addpost',[PostController::class,'form'])->name('post.form');
Route::get('/posts/{post}/edit',[PostController::class,'editForm']);
#POST Routes:
Route::post('/posts/{post}/comments',[CommentController::class,'store']);
Route::post('/posts/store',[PostController::class,'store']);
Route::post('/posts/Search',[PostController::class,'search']);
#DELETE Routes:
Route::delete('/posts/{post}/delete',[PostController::class,'destroy']);
Route::delete('/posts/{comment}/comment/delete',[CommentController::class,'destroy']);
#UPDATE Routes:
Route::put('/posts/{post}/update',[PostController::class,'update']);