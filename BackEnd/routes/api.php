<?php

use App\Http\Controllers\Api\SaveController;
use Illuminate\Support\Facades\Route;

Route::get('/salvar', [SaveController::class, 'index']);
Route::post('/salvar', [SaveController::class, 'save']);
