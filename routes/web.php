<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BookCategoryController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserSettingsController;
use App\Http\Controllers\TicketController;

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

Route::prefix('cart')->group(function () {
    Route::get('/', [CartController::class, 'index'])->name('cart.index'); // Exibir carrinho
    Route::post('/add', [CartController::class, 'add'])->name('cart.add'); // Adicionar ao carrinho
    Route::post('/update', [CartController::class, 'update'])->name('cart.update'); // Atualizar carrinho
    Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove'); // Remover item
});

Route::get('/tickets', [TicketController::class, 'create'])->name('tickets.create');
Route::post('/tickets', [TicketController::class, 'store'])->name('tickets.store');



require __DIR__ . '/auth.php';
