<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\weCinestarController;

Route::controller(weCinestarController::class) ->group(function() {
    Route::get('/', "index")->name('index');
    Route::get('/cines', "cines")->name('cines');
    Route::get('/cine/{RazonSocial}', "cine")->name('cine');
    Route::get('/peliculas/{id}', "peliculas")->name('peliculas');
    Route::get('/pelicula/{NombrePelicula}', "pelicula")-> name('pelicula');

});

