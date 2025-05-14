<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\kiwalController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('accueil', [kiwalController::class, 'index']);
Route::get('propos', [kiwalController::class, 'propos']);
Route::get('service', [kiwalController::class, 'service']);
Route::get('contact', [kiwalController::class, 'contact']);
