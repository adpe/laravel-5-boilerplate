<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\PluginsController;

// All route names are prefixed with 'admin.'.
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('plugins', [PluginsController::class, 'index'])->name('plugins');
