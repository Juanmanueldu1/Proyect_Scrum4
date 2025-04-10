<!DOCTYPE html>
<html>
<head>
    <title>Listado de Facturas</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .table-container {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        .create-button {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        .create-button:hover {
            background-color: #218838;
        }

        table {
            background: white;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            width: 100%;
            max-width: 1100px;
        }

        th, td {
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #e9ecef;
        }

        .action-buttons {
            display: flex;
            gap: 10px;
            justify-content: center;
        }

        .btn {
            padding: 6px 12px;
            border: none;
            border-radius: 6px;
            color: white;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .btn-edit {
            background-color: #007bff;
        }

        .btn-edit:hover {
            background-color: #0069d9;
        }

        .btn-delete {
            background-color: #dc3545;
        }

        .btn-delete:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <div class="table-container">
        <h1>Listado de Facturas</h1>

        <a href="{{ route('facturas.create') }}" class="create-button">+ Crear Nueva Factura</a>

        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha</th>
                    <th>Cliente</th>
                    <th>Tipo Doc</th>
                    <th>Número Doc</th>
                    <th>Producto</th>
                    <th>Mantenimiento</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>IVA</th>
                    <th>Total</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($facturas as $factura)
                    <tr>
                        <td>{{ $factura->id }}</td>
                        <td>{{ $factura->fecha_factura }}</td>
                        <td>{{ $factura->nombre_cliente }}</td>
                        <td>{{ $factura->tipo_documento }}</td>
                        <td>{{ $factura->numero_documento }}</td>
                        <td>{{ $factura->producto_compra }}</td>
                        <td>{{ $factura->tipo_mantenimiento }}</td>
                        <td>{{ $factura->cantidad }}</td>
                        <td>${{ $factura->precio }}</td>
                        <td>{{ $factura->iva }}%</td>
                        <td>${{ $factura->total }}</td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('facturas.edit', $factura->id) }}">
                                    <button type="button" class="btn btn-edit">Editar</button>
                                </a>
                                <form action="{{ route('facturas.destroy', $factura->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-delete">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>

