<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\EleveController;
use Illuminate\Support\Facades\Route;

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

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

//Crud Eleve
Route::get('/ajouterEleve', [EleveController::class, 'create']);
Route::post('/ajouterEleve', [EleveController::class, 'store']);
Route::get("/listeEleves",[EleveController::class,"index"]);
Route::get("modifierEleve/{id}",[EleveController::class,'edit']);
Route::put("modifierEleve/{id}",[EleveController::class,'update']);
Route::delete("supprimerEleve/{id} ",[EleveController::class,'destroy']);