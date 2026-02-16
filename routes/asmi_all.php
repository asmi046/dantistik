<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\Page\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/contacts', [ContactsController::class, 'index'])->name('contacts');
Route::get('/control_organization', [ContactsController::class, 'control_organization'])->name('control_organization');

Route::get('/page/{slug}', [PageController::class, 'index'])->name('page');
