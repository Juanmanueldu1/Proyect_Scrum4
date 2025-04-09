@endif@extends('layout/pantilla')
@section('titulopagina','crud con Laravel')

@section('contenido')


<div class="card">
  <h5 class="card-header">Crud con laravel 11 y MYSQL</h5>
  <div class="card-body">
    <div class="row">
      <div class="col-sm-12">
        @if ($mensaje=Session::get('success'))
        <div class="alert alert-success" role="alert">
       {{$mensaje}}
</div>


      </div>
</div>
    <h5 class="card-title text-center">Listado de personas en el sistema</h5>
    <p>
    <a href="{{ route('clientes.create') }}" class="btn btn-primary">
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
                  @foreach($datos as $item)

                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->Nombre}}</td>
                    <td>{{$item->Apellido}}</td>
                    <td>{{$item-> Telefono}}</td>
                    <td>{{$item-> num_identificacion}}</td>
                    <td>{{$item-> fecha_registro}}</td>
                    <td>{{$item-> estado_cliente}}</td>
                    <td>
                    <form action='{{ route("clientes.edit", $item->id) }}' method="GET">
                     <button class="btb btb-warning btn-sm">
                     <span class="bi bi-pencil"></span>
                     </button>
                      </form>
                      </td>
                      <td>
                      <form action="{{ route('clientes.show', $item->id) }}" method="GET">
                        <button class="btn btn-danger btn-sm">
                          <span class="bi bi-trash"></span>
                        </button>

                       </form>
                      </td>
                    </td>
                    </tr>
                    @endforeach
                   
                </tbody>
                
        </table>
    </div>
  </div>
</div>



@endsection


