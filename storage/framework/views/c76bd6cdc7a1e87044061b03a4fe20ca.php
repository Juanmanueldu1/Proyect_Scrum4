<!DOCTYPE html>
<html>
<head>
    <title>Editar Factura</title>
    <link rel="stylesheet" href="<?php echo e(asset('styles.css')); ?>">
</head>
<body>
    <div class="form-container">
        <h1>Editar Factura</h1>

        <form action="<?php echo e(route('facturas.update', $factura->id)); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>

            <label>Fecha de la factura:</label>
            <input type="date" name="fecha_factura" value="<?php echo e($factura->fecha_factura); ?>" required>

            <label>Nombre del cliente:</label>
            <input type="text" name="nombre_cliente" value="<?php echo e($factura->nombre_cliente); ?>" required>

            <label>Tipo de documento:</label>
            <select name="tipo_documento" required>
                <option value="CC" <?php echo e($factura->tipo_documento == 'CC' ? 'selected' : ''); ?>>CC</option>
                <option value="TI" <?php echo e($factura->tipo_documento == 'TI' ? 'selected' : ''); ?>>TI</option>
                <option value="NIT" <?php echo e($factura->tipo_documento == 'NIT' ? 'selected' : ''); ?>>NIT</option>
            </select>

            <label>Número de documento:</label>
            <input type="text" name="numero_documento" value="<?php echo e($factura->numero_documento); ?>" pattern="[0-9]{5,15}" title="Solo números entre 5 y 15 dígitos" required>


            <label>Producto de compra:</label>
            <input type="text" name="producto_compra" value="<?php echo e($factura->producto_compra); ?>" required>

            <label>Tipo de mantenimiento:</label>
            <select name="tipo_mantenimiento" required>
                <option value="NINGUNO" <?php echo e($factura->tipo_mantenimiento == 'NINGUNO' ? 'selected' : ''); ?>>NINGUNO</option>
                <option value="PREVENTIVO" <?php echo e($factura->tipo_mantenimiento == 'PREVENTIVO' ? 'selected' : ''); ?>>PREVENTIVO</option>
                <option value="CORRECTIVO" <?php echo e($factura->tipo_mantenimiento == 'CORRECTIVO' ? 'selected' : ''); ?>>CORRECTIVO</option>
            </select>

            <label>Cantidad:</label>
            <input type="number" name="cantidad" value="<?php echo e($factura->cantidad); ?>" required>

            <label>Precio:</label>
            <input type="number" name="precio" value="<?php echo e($factura->precio); ?>" step="0.01" required>

            <label>IVA (%):</label>
            <input type="number" name="iva" value="<?php echo e($factura->iva); ?>" step="0.01" required>

            <button type="submit" class="btn btn-edit">Actualizar Factura</button>
        </form>

        <a href="<?php echo e(route('facturas.index')); ?>" class="create-button">Volver al listado</a>
    </div>
</body>
</html>

<?php /**PATH C:\xampp\htdocs\crud\primerCrud\resources\views/facturas/edit.blade.php ENDPATH**/ ?>