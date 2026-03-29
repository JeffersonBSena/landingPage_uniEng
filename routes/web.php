<?php

use App\Http\Controllers\ContatoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('landing');
})->name('home');

Route::post('/contato', [ContatoController::class, 'store'])
    ->middleware('throttle:5,1')
    ->name('contato.store');
