

<?php $__env->startSection('titulopagina',"crear un nuevo registro"); ?>

<?php $__env->startSection('contenido'); ?>
<div class="card">
  <h5 class="card-header">Eliminar persona</h5>
  <div class="card-body">
    
    <p class="card-text">
    <div class="alert alert-danger" role="alert">
 Estas seguro de eliminar este registro!!!

 <table class="table table-sm table-hover table-borderead" style="background-color:white"> 

    <thead>
        <th>id</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>num_identificacion</th>
        <th>Telefono</th>
        <th>fecha_registro</th>
        <th>estado_cliente</th>
    </thead>
    <tbody>
        <tr>
            <td><?php echo e($clientes->id); ?> </td>
            <td><?php echo e($clientes->Nombre); ?> </td>
            <td> <?php echo e($clientes->Apellido); ?></td>
            <td> <?php echo e($clientes->Telefono); ?></td>
            <td> <?php echo e($clientes->num_identificacion); ?></td>
            <td> <?php echo e($clientes->fecha_registro); ?></td>
            <td> <?php echo e($clientes->estado_cliente); ?></td>


            
        </tr>
    </tbody>
 </table>
 <hr>
 <form action="<?php echo e(route('clientes.destroy', $clientes->id)); ?>" method="POST" >
  <?php echo csrf_field(); ?>
  <?php echo method_field('DELETE'); ?>
    <a href="<?php echo e(route('clientes.index')); ?>" class="btn btn-info">
      <span class="bi bi-arrow-left"></span>Regresar
    </a>
   <button class="btn btn-danger">
   <span class="bi bi-trash"></span>Eliminar
  </button>
 </form>
</div>
    </p>
    
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout/pantilla', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\crud\primerCrud\resources\views/eliminar.blade.php ENDPATH**/ ?>