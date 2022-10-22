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
Route::get('/evenement',[\App\Http\Controllers\EvenementController::class,'showAllEvenement']);
Route::get('/reservation',[\App\Http\Controllers\ReservationController::class,'showAllReservation']);


Route::get('/deleteEvenement/{id}',[\App\Http\Controllers\EvenementController::class,'deleteEvenement'])->name('deleteEvenement');
Route::get('/showformEvenement/{id}',[\App\Http\Controllers\EvenementController::class,'editEvenement'])->name('editEvenement');
Route::get('/updateEvenement/{id}',[\App\Http\Controllers\EvenementController::class,'updateEvenement'])->name('updateEvenement');
Route::get('/showformCreateEvenement',[\App\Http\Controllers\EvenementController::class,'createEvenement'])->name('createEvenement');
Route::get('/createEvenement',[\App\Http\Controllers\EvenementController::class,'saveEvenement'])->name('saveEvenement');

Route::get('/deleteReservation/{id}',[\App\Http\Controllers\ReservationController::class,'deleteReservation'])->name('deleteReservation');
Route::get('/showformReservation/{id}',[\App\Http\Controllers\ReservationController::class,'editReservation'])->name('editReservation');
Route::get('/updateReservation/{id}',[\App\Http\Controllers\ReservationController::class,'updateReservation'])->name('updateReservation');
Route::get('/showformCreateReservation',[\App\Http\Controllers\ReservationController::class,'createReservation'])->name('createReservation');
Route::get('/createReservation',[\App\Http\Controllers\ReservationController::class,'saveReservation'])->name('saveReservation');
