<?php

use App\Livewire\AdminDashboard;
use App\Livewire\Documentation;
use App\Livewire\Checkout;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/docs', Documentation::class)->name('docs');
Route::get('/admin', AdminDashboard::class)->middleware(['auth'])->name('admin.dashboard');
Route::get('/checkout', Checkout::class)->middleware(['auth'])->name('checkout');

require __DIR__.'/auth.php';
