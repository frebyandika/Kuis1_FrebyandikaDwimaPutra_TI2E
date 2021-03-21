<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/header', [HomeController::class, 'header']);
Route::get('/footer', [HomeController::class, 'footer']);
?>