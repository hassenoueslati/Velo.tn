<?php

use App\Http\Controllers\AtelierController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('saveAtelier', [AtelierController::class, 'saveAtelier']); //Save ateliers
Route::delete('deleteAtelier/{id}', [AtelierController::class, 'deleteAtelier']); //Delete ateliers
Route::get('geditAtelier/{id}', [AtelierController::class, 'geditAtelier']); //Edit atelier
Route::post('updateAtelier/{id}', [AtelierController::class, 'updateAtelier']); //Update ateliers
Route::get('getAteliers', [AtelierController::class, 'getAteliers']); //View ateliers
Route::get('searchAtelier/{id}', [AtelierController::class, 'searchAtelier']); //Search ateliers

