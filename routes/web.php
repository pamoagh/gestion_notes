<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UEController;
use App\Http\Controllers\ResultatController;
use App\Http\Controllers\NoteController;

// Route vers la page d'accueil
Route::get('/', function () {
    return view('home'); // Charge home.blade.php
})->name('home');

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/ues', [UEController::class, 'index']);
Route::get('/ues/create', [UEController::class, 'create']);
Route::post('/ues', [UEController::class, 'store']);
Route::resource('ues', UEController::class);
Route::get('/resultats', [ResultatController::class, 'index'])->name('resultats.index');
Route::get('/resultats', [ResultatController::class, 'afficherResultats'])->name('resultats.afficher');
Route::get('/notes', [NoteController::class, 'index'])->name('notes.index');  // Pour afficher les notes
Route::post('/notes', [NoteController::class, 'store'])->name('notes.store');   // Pour enregistrer une nouvelle note
