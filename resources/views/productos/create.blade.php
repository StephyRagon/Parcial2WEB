@extends('layouts/app')

@section('title','crear')

@section('contenido')

<form method="POST" 
class="bg-white w-1/3 p-4 border-gray-100 shadow-xl rounded-lg">

<h2 class="text-2xl text-center py-4 mb-4 font-semibold" >Crear Producto</h2>
<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
placeholder="Producto" name="producto">
<br>
<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
placeholder="Precio" name="precio">
<br>
<input class="my-2 w-full bg-gray-200 p-2 text-lg rounded placeholder-gray-900"
placeholder="Stock" name="stock">

<button type="submit" class="btn btn-success">Guardar</button>

</form>



@endsection