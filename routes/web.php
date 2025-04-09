<?php

use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;



Route::get('/',[ClientesController::class, 'index'])->name('clientes.index');
Route::get('/create',[ClientesController::class, 'create'])->name('clientes.create');
Route::post('/store',[ClientesController::class, 'store'])->name('clientes.store');
Route::get('/edit/{id}',[ClientesController::class, 'edit'])->name('clientes.edit');
Route::put('/update/{id}',[ClientesController::class, 'update'])->name('clientes.update');
Route::get('/show/{id}',[ClientesController::class, 'show'])->name('clientes.show');
Route::delete('/destroy/{id}',[ClientesController::class, 'destroy'])->name('clientes.destroy');
