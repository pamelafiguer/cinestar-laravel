<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\CinestarController;
use App\Http\Controllers\api\weCinestarController;



Route::controller(CinestarController::class) ->group(function() {
   Route::get('/cines', "cines");
   Route::get('/cine/{id}', "cine");
   Route::get('/peliculas/{id}', "peliculas");
   Route::get('/pelicula/{id}', "pelicula");
});




