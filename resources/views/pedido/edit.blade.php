@extends('layout/template')

@section('title', 'editar pedido')

@section('content')

<form action="{{ url('/pedidos/'.$id) }}" method="post">
    @method("PUT")
    @csrf
    <div class="mx-auto" style="width: 600px;">
 <div class="p-4 rounded-5 vh-100 ">
  <div input-group mt-1 align-items-center fs-1 ><h2 class>Editar Pedido</h2></div>

    <form action="{{ url('/pedidos') }}" method="post">

    <div class="mb-3">
        <label for="id" class="form-label">N° compra</label>
        <input type="text" name="id" id="nid" class="form-control" value="{{
            $pedido->id }}" onmousedown="return false;">
     </div>
    
     <div class="mb-3">
        <label for="nombres" class="form-label">Nombre y Apellido</label>
        <input type="text" name="nombres" id="nombres" class="form-control" value="{{
            $pedido->nombres }}" onmousedown="return false;">
     </div>

     <div class="mb-3">
        <label for="telefono" class="form-label">Telefono</label>
        <input type="text" name="telefono" id="telefono" class="form-control" value="{{
            $pedido->telefono }}">
     </div>

     <div class="mb-3">
        <label for="direccion" class="form-label">direccion</label>
        <input type="text" name="direccion" id="direccion" class="form-control" value="{{
            $pedido->direccion }}">
     </div>

     <div class="mb-3">
        <label for="detalles" class="form-label">detalles de pedido</label>
        <textarea  name="detalles" id="detalles" class="form-control" cols="79" style="max-width: 100%;max-height: 100%" rows="10">
        {{$pedido->detalles}}
        </textarea>
     </div>

     <div class="pt-3 mt-4 text-muted border-top">
        <button type="submit" class="btn btn-primary">GUARDAR</button>

        <a href="http://localhost/comarrico-app/public" class="btn btn-success">REGRESAR</a>
     </div>
    </form>
  </div>
</div>


@endsection