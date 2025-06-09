<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

Route::get('/students', [StudentController::class, 'index']);
Route::post('/students', [StudentController::class, 'store']);
Route::get('/students/{id}/edit', [StudentController::class, 'edit']);
Route::post('/students/{id}/update', [StudentController::class, 'update']);
Route::post('/students/{id}/delete', [StudentController::class, 'destroy']);








