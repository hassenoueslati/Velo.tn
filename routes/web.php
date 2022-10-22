<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});


Route::get('/index', function () {
    return view('index');
});
Route::get('/booking', function () {
    return view('booking');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/service', function () {
    return view('service');
});

Route::get('/AllPost',[\App\Http\Controllers\PostController::class, 'showAllPost']);
Route::get('/ShowPost/{id}',[\App\Http\Controllers\PostController::class, 'showPost'])->name('showPost');
Route::get('/CreatePost',[\App\Http\Controllers\PostController::class, 'createPost']);
Route::get('/DeletePost/{id}',[\App\Http\Controllers\PostController::class, 'deletePost'])->name('deletePost');
Route::get('/ShowFormPost/{id}',[\App\Http\Controllers\PostController::class, 'editPost'])->name('showFormPost');
Route::get('/UpdatePost/{id}',[\App\Http\Controllers\PostController::class, 'updatePost'])->name('updatePost');
Route::get('/ShowFormCreatePost',[\App\Http\Controllers\PostController::class, 'createPost'])->name('createPost');
Route::get('/CreatePost',[\App\Http\Controllers\PostController::class, 'savePost'])->name('savePost');

Route::post('/CreateCommentaire/{post}',[\App\Http\Controllers\CommentaireController::class, 'saveCommentaire'])->name('createCommentaire');
