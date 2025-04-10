

<?php $__env->startSection('titulopagina',"crear un nuevo registro"); ?>

<?php $__env->startSection('contenido'); ?>
<div class="card">
  <h5 class="card-header">Actualizar nueva persona</h5>
  <div class="card-body">
    
    <p class="card-text">
      <form action="<?php echo e(route('clientes.update',$clientes->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field("PUT"); ?>
        <label for="">id</label>
        <input type="number" name="id" clsss="form-control" required value="<?php echo e($clientes->id); ?>">
        <label for="">Nombre</label>
        <input type="text" name="Nombre" clsss="form-control" required value="<?php echo e($clientes->Nombre); ?>">
        <label for="">Apellido</label>
        <input type="text" name="Apellido" clsss="form-control" required value="<?php echo e($clientes->Apellido); ?>">
        <label for="">num_identificacion</label>
        <input type="number" name="num_identificacion" clsss="form-control" required value="<?php echo e($clientes->num_identificacion); ?>">
        <label for="">Telefono</label>
        <input type="number" name="Telefono" clsss="form-control" required value="<?php echo e($clientes->Telefono); ?>">
        <label for="">fecha_registro</label>
        <input type="date" name="fecha_registro" clsss="form-control" required value="<?php echo e($clientes->fecha_registro); ?>">
        <label for="">estado_cliente</label>
        <input type="text" name="estado_cliente" clsss="form-control" required value="<?php echo e($clientes->estado_cliente); ?>">
        <br>   
        <a href="<?php echo e(route('clientes.index')); ?>" class="btn btn-info">Regresar</a>
       <button class="btn btn-warning">
       <span class="bi bi-pencil"></span>Actualizar
      </button>
      
      </form>
    
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/pantilla', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\crud\primerCrud\resources\views/actualizar.blade.php ENDPATH**/ ?>