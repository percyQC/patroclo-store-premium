<?php

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\SubcategoriaController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias', [CategoriaController::class,'index'])->name('categorias.index');

Route::get('/categorias/{idCategoria}/subcategorias',[SubcategoriaController::class,'index'])->name('subcategorias.index');

Route::get('/subcategorias/{id_subcategoria}/productos}',[ProductoController::class,'index'])->name('productos.index');
