<?php

use App\Http\Controllers\FacturaController;

use Illuminate\Support\Facades\Route;


Route::get('/', [FacturaController::class, 'index'])->name('facturas.index');
Route::get('/create', [FacturaController::class, 'create'])->name('facturas.create');
Route::post('/store', [FacturaController::class, 'store'])->name('facturas.store');
Route::get('/edit/{id}', [FacturaController::class, 'edit'])->name('facturas.edit');
Route::put('/update/{id}', [FacturaController::class, 'update'])->name('facturas.update');
Route::get('/show/{id}', [FacturaController::class, 'show'])->name('facturas.show');
Route::delete('/destroy/{id}', [FacturaController::class, 'destroy'])->name('facturas.destroy');
