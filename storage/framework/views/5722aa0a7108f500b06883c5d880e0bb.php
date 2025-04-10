<!DOCTYPE html>
<html>
<head>
    <title>Listado de Facturas</title>
    <link rel="stylesheet" href="<?php echo e(asset('styles.css')); ?>">
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

        <a href="<?php echo e(route('facturas.create')); ?>" class="create-button">+ Crear Nueva Factura</a>

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
                <?php $__currentLoopData = $facturas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $factura): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($factura->id); ?></td>
                        <td><?php echo e($factura->fecha_factura); ?></td>
                        <td><?php echo e($factura->nombre_cliente); ?></td>
                        <td><?php echo e($factura->tipo_documento); ?></td>
                        <td><?php echo e($factura->numero_documento); ?></td>
                        <td><?php echo e($factura->producto_compra); ?></td>
                        <td><?php echo e($factura->tipo_mantenimiento); ?></td>
                        <td><?php echo e($factura->cantidad); ?></td>
                        <td>$<?php echo e($factura->precio); ?></td>
                        <td><?php echo e($factura->iva); ?>%</td>
                        <td>$<?php echo e($factura->total); ?></td>
                        <td>
                            <div class="action-buttons">
                                <a href="<?php echo e(route('facturas.edit', $factura->id)); ?>">
                                    <button type="button" class="btn btn-edit">Editar</button>
                                </a>
                                <form action="<?php echo e(route('facturas.destroy', $factura->id)); ?>" method="POST">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button type="submit" class="btn btn-delete">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\crud\primerCrud\resources\views/facturas/index.blade.php ENDPATH**/ ?>