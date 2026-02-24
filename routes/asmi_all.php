<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Page\PageController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SpecialistController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::get('/control_organization', [ContactsController::class, 'control_organization'])->name('control_organization');

Route::get('/page/{slug}', [PageController::class, 'index'])->name('page');

// Цены
Route::get('/prices', [PriceController::class, 'index'])->name('prices.index');

// Специалисты
Route::get('/specialists', [SpecialistController::class, 'index'])->name('specialists.index');
Route::get('/specialists/{slug}', [SpecialistController::class, 'show'])->name('specialists.show');

// Сервисы

Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{slug}', [ServiceController::class, 'page'])->name('services.show');
