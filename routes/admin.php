<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\AdminDashobard;
use App\Livewire\Admin\Profile;



require __DIR__.'/auth.php';


Route::middleware(['auth'])
    ->prefix('admin')
    ->as('admin.')
    ->group(function (){
       Route::get('/dashboard', AdminDashobard::class)->name('dashboard');
       Route::get('/profile', Profile::class)->name('profile');
    });


Route::prefix('admin')
    ->as('admin.')
    ->group(function (){
       Route::view('/login', 'admin.auth.login')->name('login');
    });
