@extends('layouts.layout')

@section('content')
    <h1>Formulario para la creación de pacientes.</h1>
    <form action="/patients" method="POST">
        @csrf
        <div class="mb-3">
          <label for="" class="form-label">Documento</label>
          <input type="text" class="form-control" id="documento" name="documento">
        </div>
        <div class="mb-3">
          <label for="" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" name="nombre">
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellido" name="apellido">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">Sexo</label>
            <input type="text" class="form-control" id="sexo" name="sexo">
          </div>
          <div class="mb-3">
            <label for="" class="form-label">EPS</label>
            <input type="text" class="form-control" id="eps" name="eps">
          </div>
          <a href="/patients" class="btn btn-secondary">Cancelar</a>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
@endsection

