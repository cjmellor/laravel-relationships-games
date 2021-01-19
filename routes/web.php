<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('games', GameController::class);
Route::resource('stores', StoreController::class);
