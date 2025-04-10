<!DOCTYPE html>
<html>
<head>
    <title>Editar Factura</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
    <div class="form-container">
        <h1>Editar Factura</h1>

        <form action="{{ route('facturas.update', $factura->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label>Fecha de la factura:</label>
            <input type="date" name="fecha_factura" value="{{ $factura->fecha_factura }}" required>

            <label>Nombre del cliente:</label>
            <input type="text" name="nombre_cliente" value="{{ $factura->nombre_cliente }}" required>

            <label>Tipo de documento:</label>
            <select name="tipo_documento" required>
                <option value="CC" {{ $factura->tipo_documento == 'CC' ? 'selected' : '' }}>CC</option>
                <option value="TI" {{ $factura->tipo_documento == 'TI' ? 'selected' : '' }}>TI</option>
                <option value="NIT" {{ $factura->tipo_documento == 'NIT' ? 'selected' : '' }}>NIT</option>
            </select>

            <label>Número de documento:</label>
            <input type="text" name="numero_documento" value="{{ $factura->numero_documento }}" pattern="[0-9]{5,15}" title="Solo números entre 5 y 15 dígitos" required>


            <label>Producto de compra:</label>
            <input type="text" name="producto_compra" value="{{ $factura->producto_compra }}" required>

            <label>Tipo de mantenimiento:</label>
            <select name="tipo_mantenimiento" required>
                <option value="NINGUNO" {{ $factura->tipo_mantenimiento == 'NINGUNO' ? 'selected' : '' }}>NINGUNO</option>
                <option value="PREVENTIVO" {{ $factura->tipo_mantenimiento == 'PREVENTIVO' ? 'selected' : '' }}>PREVENTIVO</option>
                <option value="CORRECTIVO" {{ $factura->tipo_mantenimiento == 'CORRECTIVO' ? 'selected' : '' }}>CORRECTIVO</option>
            </select>

            <label>Cantidad:</label>
            <input type="number" name="cantidad" value="{{ $factura->cantidad }}" required>

            <label>Precio:</label>
            <input type="number" name="precio" value="{{ $factura->precio }}" step="0.01" required>

            <label>IVA (%):</label>
            <input type="number" name="iva" value="{{ $factura->iva }}" step="0.01" required>

            <button type="submit" class="btn btn-edit">Actualizar Factura</button>
        </form>

        <a href="{{ route('facturas.index') }}" class="create-button">Volver al listado</a>
    </div>
</body>
</html>

