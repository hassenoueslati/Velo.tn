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

/* start Gestion Forum */
Route::get('/AllPost',[\App\Http\Controllers\PostController::class, 'showAllPost']);
Route::get('/ShowPost/{id}',[\App\Http\Controllers\PostController::class, 'showPost'])->name('showPost');
Route::get('/DeletePost/{id}',[\App\Http\Controllers\PostController::class, 'deletePost'])->name('deletePost');
Route::get('/ShowFormPost/{id}',[\App\Http\Controllers\PostController::class, 'editPost'])->name('showFormPost');
Route::get('/UpdatePost/{id}',[\App\Http\Controllers\PostController::class, 'updatePost'])->name('updatePost');
Route::get('/ShowFormCreatePost',[\App\Http\Controllers\PostController::class, 'createPost'])->name('createPost');
Route::get('/CreatePost',[\App\Http\Controllers\PostController::class, 'savePost'])->name('savePost');
Route::get('/searchPost',[\App\Http\Controllers\PostController::class, 'searchPost']);

Route::post('/CreateCommentaire/{post}',[\App\Http\Controllers\CommentaireController::class, 'saveCommentaire'])->name('createCommentaire');
Route::get('/DeleteCommentaire/{id}',[\App\Http\Controllers\CommentaireController::class, 'deleteCommentaire'])->name('deleteCommentaire');
Route::get('/UpdateCommentaire/{id}',[\App\Http\Controllers\CommentaireController::class, 'updateCommentaire'])->name('updateCommentaire');
Route::get('/ShowFormUpdateCommentaire/{id}',[\App\Http\Controllers\CommentaireController::class, 'editCommentaire'])->name('editCommentaire');


Route::get('/forum',[\App\Http\Controllers\PostController::class, 'showAllPostBack']);
Route::get('/DeletePostBack/{id}',[\App\Http\Controllers\PostController::class, 'deletePostBack'])->name('deletePostBack');
Route::get('/ShowPostBack/{id}',[\App\Http\Controllers\PostController::class, 'showPostBack'])->name('showPostBack');
Route::get('/CreatePostBack',[\App\Http\Controllers\PostController::class, 'savePostBack'])->name('savePostBack');
Route::get('/UpdatePostBack/{id}',[\App\Http\Controllers\PostController::class, 'updatePostBack'])->name('updatePostBack');
Route::get('/ShowFormPostBack/{id}',[\App\Http\Controllers\PostController::class, 'editPostBack'])->name('showFormPostBack');


Route::get('/searchPostBack',[\App\Http\Controllers\PostController::class, 'searchPostBack']);
Route::post('/CreateCommentaireBack/{post}',[\App\Http\Controllers\CommentaireController::class, 'saveCommentaireBack'])->name('createCommentaireBack');
Route::get('/DeleteCommentaireBack/{id}',[\App\Http\Controllers\CommentaireController::class, 'deleteCommentaireBack'])->name('deleteCommentaireBack');
Route::get('/ShowFormUpdateCommentaireBack/{id}',[\App\Http\Controllers\CommentaireController::class, 'editCommentaireBack'])->name('editCommentaireBack');
Route::get('/UpdateCommentaireBack/{id}',[\App\Http\Controllers\CommentaireController::class, 'updateCommentaireBack'])->name('updateCommentaireBack');

/* End Gestion Forum */

//AteliersBack
Route::get('/atelier',[\App\Http\Controllers\AtelierController::class, 'showAllAtelierBack']);
Route::get('/ShowAtelier/{id}',[\App\Http\Controllers\AtelierController::class, 'showAtelier'])->name('showAtelier');
Route::get('/CreateAtelier',[\App\Http\Controllers\AtelierController::class, 'createAtelier']);
Route::get('/ShowFormCreateAtelier',[\App\Http\Controllers\AtelierController::class, 'createAtelier'])->name('createAtelier');
Route::get('/CreateAtelier',[\App\Http\Controllers\AtelierController::class, 'saveAtelier'])->name('saveAtelier');
Route::get('/ShowFormAtelier/{id}',[\App\Http\Controllers\AtelierController::class, 'editAtelier'])->name('showFormAtelier');
Route::get('/UpdateAtelier/{id}',[\App\Http\Controllers\AtelierController::class, 'updateAtelier'])->name('updateAtelier');
Route::get('/DeleteAtelier/{id}',[\App\Http\Controllers\AtelierController::class, 'deleteAtelier'])->name('deleteAtelier');

//PartenaireBack
Route::get('/partenaire',[\App\Http\Controllers\PartenaireController::class, 'showAllPartenaireBack']);
Route::get('/ShowPartenaire/{id}',[\App\Http\Controllers\PartenaireController::class, 'showPartenaire'])->name('showPartenaire');
Route::get('/CreatePartenaire',[\App\Http\Controllers\PartenaireController::class, 'createPartenaire']);
Route::get('/ShowFormCreatePartenaire',[\App\Http\Controllers\PartenaireController::class, 'createPartenaire'])->name('createPartenaire');
Route::get('/CreatePartenaire',[\App\Http\Controllers\PartenaireController::class, 'savePartenaire'])->name('savePartenaire');
Route::get('/ShowFormPartenaire/{id}',[\App\Http\Controllers\PartenaireController::class, 'editPartenaire'])->name('showFormPartenaire');
Route::get('/UpdatePartenaire/{id}',[\App\Http\Controllers\PartenaireController::class, 'updatePartenaire'])->name('updatePartenaire');
Route::get('/DeletePartenaire/{id}',[\App\Http\Controllers\PartenaireController::class, 'deletePartenaire'])->name('deletePartenaire');


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

