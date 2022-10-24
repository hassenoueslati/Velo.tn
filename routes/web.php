<?php

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


/*Start Gestion evenement */

Route::get('/evenement',[\App\Http\Controllers\EvenementController::class,'showAllEvenement']);
Route::get('/reservation',[\App\Http\Controllers\ReservationController::class,'showAllReservation']);
Route::get('/EvenementBack',[\App\Http\Controllers\EvenementController::class,'showAllEvenementBack']);
Route::get('/ReservationBack',[\App\Http\Controllers\ReservationController::class,'showAllReservationBack']);


Route::get('/deleteEvenement/{id}',[\App\Http\Controllers\EvenementController::class,'deleteEvenement'])->name('deleteEvenement');
Route::get('/showformEvenement/{id}',[\App\Http\Controllers\EvenementController::class,'editEvenement'])->name('editEvenement');
Route::get('/updateEvenement/{id}',[\App\Http\Controllers\EvenementController::class,'updateEvenement'])->name('updateEvenement');
Route::get('/showformCreateEvenement',[\App\Http\Controllers\EvenementController::class,'createEvenement'])->name('createEvenement');
Route::get('/createEvenement',[\App\Http\Controllers\EvenementController::class,'saveEvenement'])->name('saveEvenement');
Route::get('/search',[\App\Http\Controllers\EvenementController::class,'searchEvenement']);


Route::get('/deleteReservation/{id}',[\App\Http\Controllers\ReservationController::class,'deleteReservation'])->name('deleteReservation');
Route::get('/showformReservation/{id}',[\App\Http\Controllers\ReservationController::class,'editReservation'])->name('editReservation');
Route::get('/updateReservation/{id}',[\App\Http\Controllers\ReservationController::class,'updateReservation'])->name('updateReservation');
Route::get('/showformCreateReservation',[\App\Http\Controllers\ReservationController::class,'createReservation'])->name('createReservation');
Route::get('/createReservation',[\App\Http\Controllers\ReservationController::class,'saveReservation'])->name('saveReservation');


Route::get('/showformEvenementBack/{id}',[\App\Http\Controllers\EvenementController::class,'editEvenementBack'])->name('editEvenementBack');
Route::get('/createEvenementBack',[\App\Http\Controllers\EvenementController::class,'saveEvenementBack'])->name('saveEvenementBack');


Route::get('/showformReservationBack/{id}',[\App\Http\Controllers\ReservationController::class,'editReservationBack'])->name('editReservationBack');
Route::get('/deleteReservationBack/{id}',[\App\Http\Controllers\ReservationController::class,'deleteReservationBack'])->name('deleteReservationBack');





/*End  Gestion evenement */
