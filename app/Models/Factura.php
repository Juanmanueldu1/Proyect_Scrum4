<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha_factura',
        'nombre_cliente',
        'tipo_documento',
        'numero_documento',
        'producto_compra',
        'tipo_mantenimiento',
        'cantidad',
        'precio',
        'iva',
        'total',
    ];
}

