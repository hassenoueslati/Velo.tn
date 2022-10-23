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

Route::get('/product', function () {
    return view('product');
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

Route::get('/AllProduit',[\App\Http\Controllers\ProduitController::class, 'showAllProduit']);
Route::get('/DeleteProduit/{id}',[\App\Http\Controllers\ProduitController::class, 'deleteProduit'])->name('deleteProduit');

Route::get('/editProduit/{id}',[\App\Http\Controllers\ProduitController::class, 'editProduit'])->name('editProduit');

Route::get('/updateProduit/{id}',[\App\Http\Controllers\ProduitController::class, 'updateProduit'])->name('updateProduit');


Route::get('/createformProduit',[\App\Http\Controllers\ProduitController::class, 'createformProduit'])->name('createformProduit');
Route::get('/search',[\App\Http\Controllers\ProduitController::class, 'searchProduit'])->name('searchProduit');


Route::get('/saveProduit',[\App\Http\Controllers\ProduitController::class, 'saveProduit'])->name('saveProduit');

/*Promotion*/
Route::get('/AllPromotion',[\App\Http\Controllers\PromotionController::class, 'showAllPromotion']);
Route::get('/createformpromotion',[\App\Http\Controllers\PromotionController::class, 'createformpromotion'])->name('createformpromotion');
Route::get('/savePromotion',[\App\Http\Controllers\PromotionController::class, 'savePromotion'])->name('savePromotion');

/*Category routes*/
Route::get('/createformcategory',[\App\Http\Controllers\CategoryController::class, 'createformCategory'])->name('createformCategory');
Route::get('/saveCategory',[\App\Http\Controllers\CategoryController::class, 'saveCategory'])->name('saveCategory');



