@extends('layouts.template')

@section('contenido')
<h2>EDITAR REGISTROS</h2>

<form action="/products/{{$product->id}}" method="POST">
    @csrf    
    @method('PUT')
  <div class="mb-3">
    <label for="" class="form-label">Name</label>
    <input id="name" name="name" type="text" class="form-control" value="{{$product->name}}">    
  </div>
  <div class="mb-3">
    <label for="" class="form-label">slug</label>
    <input id="slug" name="slug" type="text" class="form-control" value="{{$product->slug}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">description</label>
    <input id="description" name="description" type="text" class="form-control" value="{{$product->description}}">
  </div>
  <div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="price" name="price" type="number" step="any" class="form-control" value="{{$product->price}}">
  </div>
  <a href="/product" class="btn btn-secondary">Cancelar</a>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>

@endsection