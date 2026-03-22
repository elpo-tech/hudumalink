<?php

use App\Http\Controllers\Dash;
use App\Http\Controllers\Huduma;
use Illuminate\Support\Facades\Route;




Route::get('/', [Huduma::class, 'login'])->name('login');
Route::get('/sign_up', [Huduma::class, 'sign'])->name('sign');
Route::get('/dashboard', [Dash::class, 'dash'])->name('dash');
Route::get('/profile', [Dash::class, 'pro'])->name('profile');
Route::get('/patient_details', [Dash::class, 'pat'])->name('details');
Route::get('/patient_records', [Dash::class, 'patr'])->name('records');
Route::get('/hospitals', [Dash::class, 'hosi'])->name('hostpitals');
Route::get('/services', [Dash::class, 'serv'])->name('Services');
Route::get('/insurance', [Dash::class, 'insure'])->name('insurance');
Route::get('/admissions', [Dash::class, 'admit'])->name('admission');
Route::get('/approvals', [Dash::class, 'app'])->name('approvals');
Route::get('/general_settings', [Dash::class, 'gen'])->name('general');
Route::get('/users', [Dash::class, 'user'])->name('users');
Route::get('/system_logs', [Dash::class, 'log'])->name('system_logs');
