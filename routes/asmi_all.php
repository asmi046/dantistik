<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
