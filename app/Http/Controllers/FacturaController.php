<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index()
    {
        $facturas = Factura::all();
        return view('facturas.index', compact('facturas'));
    }

    public function create()
    {
        return view('facturas.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'fecha_factura' => 'required|date',
            'nombre_cliente' => 'required|string|max:255',
            'tipo_documento' => 'required|string|max:50',
            'numero_documento' => 'required|string|max:50',
            'producto_compra' => 'required|string|max:255',
            'tipo_mantenimiento' => 'required|string|max:255',
            'cantidad' => 'required|integer|min:1',
            'precio' => 'required|numeric|min:0',
            'iva' => 'required|numeric|min:0',
        ]);

        // Calcular total
        $totalSinIva = $request->cantidad * $request->precio;
        $totalConIva = $totalSinIva + ($totalSinIva * ($request->iva / 100));

        Factura::create(array_merge($validated, ['total' => $totalConIva]));

        return redirect()->route('facturas.index')->with('success', 'Factura creada con éxito');
    }

    public function edit($id)
    {
        $factura = Factura::findOrFail($id);
        return view('facturas.edit', compact('factura'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'fecha_factura' => 'required|date',
            'nombre_cliente' => 'required|string|max:255',
            'tipo_documento' => 'required|string|max:50',
            'numero_documento' => 'required|string|max:50',
            'producto_compra' => 'required|string|max:255',
            'tipo_mantenimiento' => 'required|string|max:255',
            'cantidad' => 'required|integer|min:1',
            'precio' => 'required|numeric|min:0',
            'iva' => 'required|numeric|min:0',
        ]);

        // Calcular total
        $totalSinIva = $request->cantidad * $request->precio;
        $totalConIva = $totalSinIva + ($totalSinIva * ($request->iva / 100));

        $factura = Factura::findOrFail($id);
        $factura->update(array_merge($validated, ['total' => $totalConIva]));

        return redirect()->route('facturas.index')->with('success', 'Factura actualizada con éxito');
    }

    public function destroy($id)
    {
        Factura::destroy($id);
        return redirect()->route('facturas.index')->with('success', 'Factura eliminada');
    }
}



