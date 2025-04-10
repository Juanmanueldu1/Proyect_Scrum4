

<?php $__env->startSection('titulopagina',"crear un nuevo registro"); ?>

<?php $__env->startSection('contenido'); ?>
<div class="card">
  <h5 class="card-header">Agregar nueva persona</h5>
  <div class="card-body">
    
    <p class="card-text">
      <form action="<?php echo e(route('clientes.store')); ?>" method="POST">
       <?php echo csrf_field(); ?>
        <label for="">id</label>
        <input type="number" name="id" clsss="form-control" required>
        <label for="">Nombre</label>
        <input type="text" name="Nombre" clsss="form-control" required>
        <label for="">Apellido</label>
        <input type="text" name="Apellido" clsss="form-control" required>
        <label for="">num_identificacion</label>
        <input type="number" name="num_identificacion" clsss="form-control" required>
        <label for="">Telefono</label>
        <input type="number" name="Telefono" clsss="form-control" required>
        <label for="">fecha_registro</label>
        <input type="date" name="fecha_registro" clsss="form-control" required>
        <label for="">estado_cliente</label>
        <input type="text" name="estado_cliente" clsss="form-control" required>
        <br>   
        <a href="<?php echo e(route('clientes.index')); ?>" class="btn btn-info">
          <span class="bi bi-arrow-left"></span>Regresar
        </a>
       <button class="btn btn-primary">
        <span class="bi bi-plus"></span>Agregar
      </button>
      
      </form>
    
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/pantilla', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\crud\primerCrud\resources\views/agregar.blade.php ENDPATH**/ ?>