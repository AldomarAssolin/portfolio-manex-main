<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::middleware(['auth', 'is_admin'])->prefix('admin')->name('admin.')->group(function () {
    // CRUD de Projetos
    Route::resource('projects', ProjectController::class);
});
