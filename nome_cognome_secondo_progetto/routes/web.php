<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\ControllerPrincipale;
use Illuminate\Support\Facades\Route;

Route::get('homepage', function () {
    return view('homepage');
})->name('homepage');

Route::get('Servizi', [ControllerPrincipale::class, 'sezioni'])->name('servizi');

Route::get('TuttiServizi/{singolo}',[ControllerPrincipale::class, 'TuttiServizi'])->name('TuttiServizi');

Route::get('Contatti', function () {
    return view('contatti');
})->name('contatti');


Route::post('Mail', [ControllerPrincipale::class, 'ShowMail'])->name('Mail');