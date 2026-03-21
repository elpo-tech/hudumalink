<?php

use App\Http\Controllers\Huduma;
use Illuminate\Support\Facades\Route;




Route::get('/', [Huduma::class, 'dash'])->name('dashboard');
Route::get('/dashboard', [Huduma::class, 'hey'])->name('dashboard');
