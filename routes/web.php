<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CategoryController::class, 'index'])->name('home');
Route::get('/categories/create',[ CategoryController::class, 'create' ] )
->name('categories.create');
Route::post('/categories/store',[ CategoryController::class, 'store' ] )
    ->name('categories.store');
Route::get('/categories/{id}/edit',[ CategoryController::class, 'edit' ] )->name('categories.edit');
Route::put('/categories/{id}/update',[ CategoryController::class, 'update' ] )->name('categories.update');
Route::delete('/categories/{id}/delete',[ CategoryController::class, 'destroy' ] )->name('categories.destroy');

