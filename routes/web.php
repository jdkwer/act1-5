<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StudentController;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [StudentController::class, 'index'])->name('dashboard');

    // Optional: keep /students routes for CRUD actions if you want
    Route::post('/students', [StudentController::class, 'store']);
    Route::get('/students/{id}/edit', [StudentController::class, 'edit']);
    Route::post('/students/{id}/update', [StudentController::class, 'update']);
    Route::post('/students/{id}/delete', [StudentController::class, 'destroy']);
});

require __DIR__.'/auth.php';
