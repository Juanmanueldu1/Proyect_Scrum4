<!DOCTYPE html>
<html>
<head>
    <title>Crear Factura</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
</head>
<body>
    <h1>Crear Factura</h1>

    <form action="{{ route('facturas.store') }}" method="POST">
        @csrf

        <label>Fecha de la factura:</label>
        <input type="date" name="fecha_factura" required><br><br>

        <label>Nombre del cliente:</label>
        <input type="text" name="nombre_cliente" required><br><br>

        <label>Tipo de documento:</label>
        <select name="tipo_documento" required>
            <option value="">Seleccione</option>
            <option value="CC">CC</option>
            <option value="TI">TI</option>
            <option value="CE">CE</option>
            <option value="NIT">NIT</option>
            <option value="Otro">Otro</option>
        </select><br><br>

        <label>Número de documento:</label>
        <input type="text" name="numero_documento" pattern="[0-9]{5,15}" title="Solo números entre 5 y 15 dígitos" required><br><br>

        <label>Producto de compra:</label>
        <input type="text" name="producto_compra" required><br><br>

        <label>Tipo de mantenimiento:</label>
        <input type="text" name="tipo_mantenimiento" required><br><br>

        <label>Cantidad:</label>
        <input type="number" name="cantidad" required><br><br>

        <label>Precio:</label>
        <input type="text" name="precio" id="precio" required><br><br>

        <label>IVA (%):</label>
        <input type="number" name="iva" step="0.01" required><br><br>

        <button type="submit">Crear Factura</button>
    </form>

    <br>
    <a href="{{ route('facturas.index') }}">Volver al listado</a>

    <script>
    const inputPrecio = document.getElementById('precio');

    inputPrecio.addEventListener('input', function (e) {
        let valor = e.target.value.replace(/\D/g, '');
        e.target.value = new Intl.NumberFormat('en-US').format(valor);
    });

    document.querySelector('form').addEventListener('submit', function () {
        let precio = inputPrecio.value.replace(/,/g, '');
        inputPrecio.value = precio;
    });
</script>

</body>
</html>

