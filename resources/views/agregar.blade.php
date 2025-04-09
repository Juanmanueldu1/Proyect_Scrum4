@extends('layout/pantilla')

@section('titulopagina',"crear un nuevo registro")

@section('contenido')
<div class="card">
  <h5 class="card-header">Agregar nueva persona</h5>
  <div class="card-body">
    
    <p class="card-text">
      <form action="{{route('clientes.store') }}" method="POST">
       @csrf
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
        <a href="{{ route('clientes.index') }}" class="btn btn-info">
          <span class="bi bi-arrow-left"></span>Regresar
        </a>
       <button class="btn btn-primary">
        <span class="bi bi-plus"></span>Agregar
      </button>
      
      </form>
    
  </div>
</div>
@endsection