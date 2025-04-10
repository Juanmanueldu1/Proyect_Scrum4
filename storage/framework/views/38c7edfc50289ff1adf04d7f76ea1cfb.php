<?php $__env->startSection('titulopagina','crud con Laravel'); ?>

<?php $__env->startSection('contenido'); ?>


<div class="card">
  <h5 class="card-header">Crud con laravel 11 y MYSQL</h5>
  <div class="card-body">
    <div class="row">
      <div class="col-sm-12">
        <?php if($mensaje=Session::get('success')): ?>
        <div class="alert alert-success" role="alert">
       <?php echo e($mensaje); ?>

</div>
<?php endif; ?>
      </div>
</div>
    <h5 class="card-title text-center">Listado de personas en el sistema</h5>
    <p>
    <a href="<?php echo e(route('clientes.create')); ?>" class="btn btn-primary">
      <span class= "bi bi-plus"></span> Agregar nueva persona
    </a>
    </p>
    <hr>
    <p class="card-text"></p>
    <div class="table table-responsive">
        <table class="table table-sm table-bordered"> 
            <thead>
                 
                <th>id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Telefono</th>
                <th>num_identificacion</th>
                <th>fecha_registro</th>
                <th>estado_cliente</th>
                <th>Editar</th>
                <th>Eliminar</th>
                </thead>
                <tbody>
                  <?php $__currentLoopData = $datos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><?php echo e($item->Nombre); ?></td>
                    <td><?php echo e($item->Apellido); ?></td>
                    <td><?php echo e($item-> Telefono); ?></td>
                    <td><?php echo e($item-> num_identificacion); ?></td>
                    <td><?php echo e($item-> fecha_registro); ?></td>
                    <td><?php echo e($item-> estado_cliente); ?></td>
                    <td>
                    <form action='<?php echo e(route("clientes.edit", $item->id)); ?>' method="GET">
                     <button class="btb btb-warning btn-sm">
                     <span class="bi bi-pencil"></span>
                     </button>
                      </form>
                      </td>
                      <td>
                      <form action="<?php echo e(route('clientes.show', $item->id)); ?>" method="GET">
                        <button class="btn btn-danger btn-sm">
                          <span class="bi bi-trash"></span>
                        </button>

                       </form>
                      </td>
                    </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                   
                </tbody>
                
        </table>
    </div>
  </div>
</div>



<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout/pantilla', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\crud\primerCrud\resources\views/inicio.blade.php ENDPATH**/ ?>