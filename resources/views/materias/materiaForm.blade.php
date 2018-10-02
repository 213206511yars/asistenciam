@extends('layouts.tema')

@section('contenido')
<div class="app-title">
    <div>
        <h1><i class="fa fa-dashboard"></i> Nueva Materias</h1>
        <p>Subtítulo</p>
    </div>
    <ul class="app-breadcrumb breadcrumb">
        <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="#">Materias</a></li>
        <li class="breadcrumb-item"><a href="#">Nueva Materia</a></li>
    </ul>
</div>
<div class="row">
  <div class="col-md-12">
    <div class="tile">
      <form action="{{ route('materia.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="materia">Materia</label>
          <input name="materia" class="form-control" type="text" placeholder="Escriba el nombre de la materia">
          <small class="form-text text-muted">Sus alumnos se podrán inscribir a su materia.</small>
        </div>
        <div class="form-group">
          <label for="seccion">Sección</label>
          <input name="seccion" class="form-control" type="text">
        </div>
        <div class="form-group">
          <label for="crn">CRN</label>
          <input name="crn" class="form-control" type="text" placeholder="CRN/NRC">
        </div>
        <div class="form-group">
          <label for="salon">Salón</label>
          <input name="salon" class="form-control" type="text">
        </div>
        
        <div class="tile-footer">
          <button class="btn btn-primary" type="submit">Aceptar</button>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection