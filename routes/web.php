<?php

use Illuminate\Support\Facades\Route;

\Illuminate\Support\Facades\Auth::loginUsingId(4);



Route::view('/', 'welcome');
Route::get('/documents/{document}', [\App\Http\Controllers\DocumnentController::class, 'show']);
Route::get('/users', [\App\Http\Controllers\UserController::class, 'index']);
Route::get('/users/request', [\App\Http\Controllers\UserController::class, 'request']);
Route::get('/posts', [\App\Http\Controllers\PostController::class, 'index']);
Route::get('/posts/{post}', [\App\Http\Controllers\PostController::class, 'show']);
Route::get('/lesson', [App\Http\Controllers\LessonController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
