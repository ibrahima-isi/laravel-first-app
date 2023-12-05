<?php

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


// routes concernants les formations:
// route vers la liste des formtions:
Route::get('/formation', '\App\Http\Controllers\ClasseController@index')->name('formation');
// route vers le formulaire d'ajout de formation:
Route::get('/ajoutFormation', '\App\Http\Controllers\ClasseController@create')->name('ajoutFormation');
// Recuperation donnees du formulaire:
Route::post('frm_store', '\App\Http\Controllers\ClasseController@store')->name('store_formation');

// Routes concernants les etudiants:
// Liste Etudiants:
Route::get('/etudiant', [\App\Http\Controllers\EtudiantController::class, 'index'])->name('etudiant');
// Vers Ajout etudiant:
Route::get('/ajoutEtudiant', '\App\Http\Controllers\EtudiantController@create')->name('ajout_etudiant');
// Recuperation des donnees du formulaire:
Route::post('frm_store', '\App\Http\Controllers\EtudiantController@store')->name('store_etudiant');
