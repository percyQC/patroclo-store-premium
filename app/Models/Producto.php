<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';

    protected $fillable = [
        'id_producto',
        'id_marca',
        'id_proveedor',
        'codigo',
        'nombre',
        'descripcion',
        'especificaciones',
        'precio_dolares',
        'stock',
        'imagen_url',
        'informacion_fabricante_url'
    ];

    public function subcategoria(){
        return $this->belongsTo(Subcategoria::class,'id_subcategoria');
    }
}
