<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', [CategoryController::class, 'index']);
Route::post('/store', [CategoryController::class, 'store']);
Route::put('/update/{category}', [CategoryController::class, 'update']);
Route::delete('/destroy/{category}', [CategoryController::class, 'destroy']);