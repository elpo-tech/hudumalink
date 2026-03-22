<?php

use App\Http\Controllers\Dash;
use App\Http\Controllers\Huduma;
use Illuminate\Support\Facades\Route;




Route::get('/', [Huduma::class, 'login'])->name('login');
Route::get('/sign_up', [Huduma::class, 'sign'])->name('sign');
Route::get('/dashboard', [Dash::class, 'dash'])->name('dash');
