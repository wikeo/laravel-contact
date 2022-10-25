<?php

use Illuminate\Support\Facades\Route;
use Wikeo\LaravelContact\Http\Controllers\ContactController;

Route::middleware('web')->get('/contact', [ContactController::class, 'index'])->name('laravel-contact.index');
Route::middleware('web')->post('/contact', [ContactController::class, 'store'])->name('laravel-contact.submit');
