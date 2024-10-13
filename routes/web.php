<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//posts
Route::get('/posts', [PostController::class, 'index']); // Get all posts
Route::post('/posts', [PostController::class, 'store']); // Create a new post
Route::get('/posts/{post}', [PostController::class, 'show']); // Get a specific post
Route::put('/posts/{post}', [PostController::class, 'update']); // Update a specific post
Route::delete('/posts/{post}', [PostController::class, 'destroy']); // Delete a specific post

Route::get('/david-get-storage-link', function() {
    Artisan::call(storage::link);
}); // Get all posts

