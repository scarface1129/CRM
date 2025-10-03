<?php

use App\Http\Controllers\SettingsController;
use App\Models\User;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return Inertia::render('Home');
});

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.index');

Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');

Route::post('/logout', function () {});
