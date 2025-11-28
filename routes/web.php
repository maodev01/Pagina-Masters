<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/nosotros', [PageController::class, 'about'])->name('about');
Route::get('/portafolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/contacto', [PageController::class, 'contact'])->name('contact');
Route::post('/contacto', [ContactController::class, 'submit'])->name('contact.submit');
