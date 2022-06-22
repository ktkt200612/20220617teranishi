<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact/confirm', [ContactController::class, 'confirm']);
Route::get('/contact/confirm', [ContactController::class, 'return']); 
Route::post('/contact/thanks', [ContactController::class, 'send']); 
Route::get('/contact/search', [ContactController::class, 'find']);
Route::post('/contact/search', [ContactController::class, 'search']);
Route::post('/contact/delete', [ContactController::class, 'delete']);
