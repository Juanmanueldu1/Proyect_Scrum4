@extends('layout/pantilla')

@section('titulopagina',"crear un nuevo registro")

@section('contenido')
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
            <td>{{$clientes->id}} </td>
            <td>{{$clientes->Nombre}} </td>
            <td> {{$clientes->Apellido}}</td>
            <td> {{$clientes->Telefono}}</td>
            <td> {{$clientes->num_identificacion}}</td>
            <td> {{$clientes->fecha_registro}}</td>
            <td> {{$clientes->estado_cliente}}</td>


            
        </tr>
    </tbody>
 </table>
 <hr>
 <form action="{{ route('clientes.destroy', $clientes->id) }}" method="POST" >
  @csrf
  @method('DELETE')
    <a href="{{route('clientes.index') }}" class="btn btn-info">
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
@endsection