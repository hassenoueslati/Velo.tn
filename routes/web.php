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



/* START gestion promotion et produit */

/*new URLS */
Route::get('/product',[\App\Http\Controllers\ProduitController::class, 'showAllProduitBack']);
Route::get('/editproduct/{id}',[\App\Http\Controllers\ProduitController::class, 'editProduitBack']);
Route::get('/promotion',[\App\Http\Controllers\PromotionController::class, 'showAllPromotionBack']);
Route::get('/category',[\App\Http\Controllers\CategoryController::class, 'showAllCategory']);



Route::get('/AllProduit',[\App\Http\Controllers\ProduitController::class, 'showAllProduit']);
Route::get('/DeleteProduit/{id}',[\App\Http\Controllers\ProduitController::class, 'deleteProduit'])->name('deleteProduit');
Route::get('/editProduit/{id}',[\App\Http\Controllers\ProduitController::class, 'editProduit'])->name('editProduit');
Route::get('/editProduitBack/{id}',[\App\Http\Controllers\ProduitController::class, 'editProduitBack'])->name('editProduitBack');
Route::get('/updateProduit/{id}',[\App\Http\Controllers\ProduitController::class, 'updateProduit'])->name('updateProduit');

Route::get('/editCategory/{id}',[\App\Http\Controllers\CategoryController::class, 'editCategory'])->name('editCategory');
Route::get('/updateCategory/{id}',[\App\Http\Controllers\CategoryController::class, 'updateCategory'])->name('updateCategory');
Route::get('/deleteCategory/{id}',[\App\Http\Controllers\CategoryController::class, 'deleteCategory'])->name('deleteCategory');


Route::get('/editPromotionBack/{id}',[\App\Http\Controllers\PromotionController::class, 'editPromotionBack'])->name('editPromotionBack');
Route::get('/updatePromotion/{id}',[\App\Http\Controllers\PromotionController::class, 'updatePromotion'])->name('updatePromotion');
Route::get('/deletePromotion/{id}',[\App\Http\Controllers\PromotionController::class, 'deletePromotion'])->name('deletePromotion');



Route::get('/createformProduit',[\App\Http\Controllers\ProduitController::class, 'createformProduit'])->name('createformProduit');
Route::get('/search',[\App\Http\Controllers\ProduitController::class, 'searchProduit'])->name('searchProduit');
Route::get('/searchback',[\App\Http\Controllers\ProduitController::class, 'searchProduitBack'])->name('searchProduitBack');


Route::get('/saveProduit',[\App\Http\Controllers\ProduitController::class, 'saveProduit'])->name('saveProduit');

/*Promotion*/
Route::get('/AllPromotion',[\App\Http\Controllers\PromotionController::class, 'showAllPromotion']);
Route::get('/createformpromotion',[\App\Http\Controllers\PromotionController::class, 'createformpromotion'])->name('createformpromotion');
Route::get('/savePromotion',[\App\Http\Controllers\PromotionController::class, 'savePromotion'])->name('savePromotion');

/*Category routes*/
Route::get('/createformcategory',[\App\Http\Controllers\CategoryController::class, 'createformCategory'])->name('createformCategory');
Route::get('/saveCategory',[\App\Http\Controllers\CategoryController::class, 'saveCategory'])->name('saveCategory');
/* END gestion promotion et produit */
