@extends('layout/pantilla')

@section('titulopagina',"crear un nuevo registro")

@section('contenido')
<div class="card">
  <h5 class="card-header">Actualizar nueva persona</h5>
  <div class="card-body">
    
    <p class="card-text">
      <form action="{{route('clientes.update',$clientes->id) }}" method="POST">
        @csrf
        @method("PUT")
        <label for="">id</label>
        <input type="number" name="id" clsss="form-control" required value="{{$clientes->id}}">
        <label for="">Nombre</label>
        <input type="text" name="Nombre" clsss="form-control" required value="{{$clientes->Nombre}}">
        <label for="">Apellido</label>
        <input type="text" name="Apellido" clsss="form-control" required value="{{$clientes->Apellido}}">
        <label for="">num_identificacion</label>
        <input type="number" name="num_identificacion" clsss="form-control" required value="{{$clientes->num_identificacion}}">
        <label for="">Telefono</label>
        <input type="number" name="Telefono" clsss="form-control" required value="{{$clientes->Telefono}}">
        <label for="">fecha_registro</label>
        <input type="date" name="fecha_registro" clsss="form-control" required value="{{$clientes->fecha_registro}}">
        <label for="">estado_cliente</label>
        <input type="text" name="estado_cliente" clsss="form-control" required value="{{$clientes->estado_cliente}}">
        <br>   
        <a href="{{ route('clientes.index') }}" class="btn btn-info">Regresar</a>
       <button class="btn btn-warning">
       <span class="bi bi-pencil"></span>Actualizar
      </button>
      
      </form>
    
  </div>
</div>
@endsection