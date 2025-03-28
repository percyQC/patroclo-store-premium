<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function index($idSubcategoria) {
        $productos = Producto::where('id_subcategoria',$idSubcategoria)
                                    ->where('estado_auditoria','1')
                                    ->get();
        return view('productos', compact('productos'));
    }
}
