<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EtudiantController;

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

Route::get('/supprimer-etudiant/{id}', [EtudiantController::class, 'supprimer_etudiant']);
Route::get('/modifier-etudiant/{id}', [EtudiantController::class, 'modifier_etudiant'])->name('modifier-etudiant');
Route::post('/modifier/traitement', [EtudiantController::class, 'modifier_etudiant_traitement'])->name('modifier-etudiant-traitement');
Route::get('/etudiant', [EtudiantController::class, 'liste_etudiant']);
Route::get('/ajouter', [EtudiantController::class, 'ajouter_etudiant']);
Route::post('/ajouter/traitement', [EtudiantController::class, 'ajouter_etudiant_traitement']);
