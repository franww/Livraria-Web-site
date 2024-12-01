<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookCategoryController;
use Illuminate\Support\Facades\Route;

// Página inicial
Route::get('/', function () {
    return view('welcome');
});

// Página do dashboard principal
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

// Rotas protegidas por autenticação
Route::middleware('auth')->group(function () {
    // Páginas do dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/dashboard/profile', [DashboardController::class, 'profile'])->name('dashboard.profile');
    Route::get('/dashboard/settings', [DashboardController::class, 'settings'])->name('dashboard.settings');
    Route::get('/dashboard/aboutwe', [DashboardController::class, 'aboutwe'])->name('dashboard.aboutwe');
    // Rotas para cada categoria (futuras páginas)
    Route::get('/dashboard/books/action', [DashboardController::class, 'actionBooks'])->name('dashboard.books.action');
    Route::get('/dashboard/books/romance', [DashboardController::class, 'romanceBooks'])->name('dashboard.books.romance');
    Route::get('/dashboard/books/kids', [DashboardController::class, 'kidsBooks'])->name('dashboard.books.kids');
    // Rotas de gerenciamento de perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard/books/action', [BookCategoryController::class, 'actionBooks'])->name('dashboard.books.action');
    Route::get('/dashboard/books/romance', [BookCategoryController::class, 'romanceBooks'])->name('dashboard.books.romance');
    Route::get('/dashboard/books/kids', [BookCategoryController::class, 'kidsBooks'])->name('dashboard.books.kids');
});

require __DIR__.'/auth.php';
