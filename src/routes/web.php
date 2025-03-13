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
    Route::get('iban', function () {
        return Inertia::render('iban');
    })->name('iban');
    Route::get('bank', function () {
        return Inertia::render('bank');
    })->name('bank');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
