<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\AcceuilControler;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/acceuil', [AcceuilControler::class, 'app']);
Route::get('/index', [AcceuilControler::class, 'acceuil']);
Route::get('/index/conn', [AcceuilControler::class, 'connection']);
Route::post('/index/conn', [AcceuilControler::class, 'connectionPost']);
Route::post('/index/conn/signUp', [AcceuilControler::class, 'connectionPost2']);
Route::get('/index/conn/signUp', [AcceuilControler::class, 'creeCompt']);
Route::get('/index/conn/resetPaswd', [AcceuilControler::class, 'motPassOublier']);
Route::get('/index/pannier', [AcceuilControler::class, 'pannierP']);

/*
*
*AUTHENTIFICATIONS ROOT
*/
Route::get('/authentic', [authController::class, 'dashboars']);
Route::get('/adminDash', [authController::class, 'dashboarsPanel']);
Route::get('/adminDash/produits', [authController::class, 'produits']);
Route::get('/adminDash/produits/acceuil', [authController::class, 'acceuil']);
Route::get('/adminDash/produits/acceuil/addBannieres', [authController::class, 'AjoutBannieres']);
Route::get('/adminDash/produits/acceuil/addWatch', [authController::class, 'AjoutWatch']);
Route::post('/adminDash/produits/acceuil/addWatch', [authController::class, 'AjoutWatchPOSTS']);
Route::get('/adminDash/produits/acceuil/addWatch/{id}', [authController::class, 'Updates'])->name('edit-watchs');

