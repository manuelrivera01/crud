@extends('layouts.template')

@section('contenido')
<h2>CREAR REGISTROS</h2>

<form action="/products" method="POST">
    @csrf
  <div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input id="name" name="name" type="text" class="form-control" tabindex="1">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Slug</label>
    <input id="slug" name="slug" type="text" class="form-control" tabindex="2">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Description</label>
    <input id="description" name="description" type="text" class="form-control" tabindex="3">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Price</label>
    <input id="price" name="price" type="number" step="any" value="0.00" class="form-control" tabindex="3">
  </div>
  <a href="/products" class="btn btn-secondary" tabindex="5">Cancelar</a>
  <button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>
</form>

@endsection