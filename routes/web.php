<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\VeloController;
use App\Http\Controllers\VeloFFController;



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
Route::get('/testimonial', function () {
    return view('testimonial');
});
Route::get('/forum', function () {
    return view('ForumBack.index');
});

Route::get('/home', function () {
    return view('BackOffice.dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/AllPost',[\App\Http\Controllers\PostController::class, 'showAllPost']);
Route::get('/ShowPost/{id}',[\App\Http\Controllers\PostController::class, 'showPost'])->name('showPost');
Route::get('/CreatePost',[\App\Http\Controllers\PostController::class, 'createPost']);
Route::get('/DeletePost/{id}',[\App\Http\Controllers\PostController::class, 'deletePost'])->name('deletePost');
Route::get('/ShowFormPost/{id}',[\App\Http\Controllers\PostController::class, 'editPost'])->name('showFormPost');
Route::get('/UpdatePost/{id}',[\App\Http\Controllers\PostController::class, 'updatePost'])->name('updatePost');
Route::get('/ShowFormCreatePost',[\App\Http\Controllers\PostController::class, 'createPost'])->name('createPost');
Route::get('/CreatePost',[\App\Http\Controllers\PostController::class, 'savePost'])->name('savePost');
Route::get('/search',[\App\Http\Controllers\PostController::class, 'searchPost']);

Route::post('/CreateCommentaire/{post}',[\App\Http\Controllers\CommentaireController::class, 'saveCommentaire'])->name('createCommentaire');
Route::get('/DeleteCommentaire/{id}',[\App\Http\Controllers\CommentaireController::class, 'deleteCommentaire'])->name('deleteCommentaire');
Route::get('/UpdateCommentaire/{id}',[\App\Http\Controllers\CommentaireController::class, 'updateCommentaire'])->name('updateCommentaire');


Route::get('/forum',[\App\Http\Controllers\PostController::class, 'showAllPostBack']);

/*start getionvelo*/ 
Route::resource('/velo', VeloController::class);
Route::resource('/location', LocationController::class);
Route::resource('/veloFF', VeloFFController::class);
/*end getionvelo*/ 

