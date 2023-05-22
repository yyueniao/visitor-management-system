<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VisitorController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/visitor/create', [VisitorController::class, 'create'])->name('visitor.create');
Route::get('/visitor/list', [VisitorController::class, 'list'])->name('visitor.list');
Route::post('/visitor', [VisitorController::class, 'store'])->name('visitor.store');
Route::delete('/visitor/{visitorId}', [VisitorController::class, 'checkout'])->name('visitor.checkout');
