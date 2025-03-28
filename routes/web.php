<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\SubcategoriaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias', [CategoriaController::class,'index'])->name('categorias.index');

Route::get('/categorias/{idCategoria}/subcategorias',[SubcategoriaController::class,'index'])->name('subcategorias.index');
