<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get("/", function () {
    return Inertia::render('Top', ['title' => 'Top']);
});

Route::get("/auth/login", function () {
    return Inertia::render('auth/Login', ['title' => 'Login']);
})->name('login');

// web.php での定義
Route::middleware(['auth:sanctum'])->prefix('internal')->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('internal/Dashboard', [
            'title' => 'Dashboard'
        ]);
    })->name('dashboard');  // 名前付きルートとして定義
});
