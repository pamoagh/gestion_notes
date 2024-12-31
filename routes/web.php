<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UEController;
use App\Http\Controllers\ResultatController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/notes', [App\Http\Controllers\NoteController::class, 'index'])->name('notes.index');
Route::get('/ues', [UEController::class, 'index']);
Route::get('/ues/create', [UEController::class, 'create']);
Route::post('/ues', [UEController::class, 'store']);
Route::resource('ues', UEController::class);
Route::get('/resultats', [ResultatController::class, 'index'])->name('resultats.index');
Route::get('/resultats', [ResultatController::class, 'afficherResultats'])->name('resultats.afficher');
