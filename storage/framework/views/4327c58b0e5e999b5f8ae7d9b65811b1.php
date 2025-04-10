<?php $__env->startSection('titulopagina','crud con Laravel'); ?>

<?php $__env->startSection('contenido'); ?>
<div class="row">
    <h1>Hola usando layouts</h1>
    <i class="bi bi-person"></i> 
    <a href="<?php echo e(route('clientes.create')); ?>">Agregar</a>
</div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout/pantilla', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\crud\primerCrud\resources\views/welcome.blade.php ENDPATH**/ ?>