<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/nosotros', [PageController::class, 'about'])->name('about');
Route::get('/servicios', [PageController::class, 'services'])->name('services');
Route::get('/ubicanos', [PageController::class, 'location'])->name('location');
Route::get('/contactanos', [PageController::class, 'contact'])->name('contact');
