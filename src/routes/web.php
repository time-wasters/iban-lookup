<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
    Route::get('ibans', function () {
        return Inertia::render('ibans/index');
    })->name('ibans.index');
    Route::get('banks', function () {
        return Inertia::render('banks/index');
    })->name('banks.index');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
