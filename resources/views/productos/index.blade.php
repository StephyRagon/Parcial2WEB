@extends('layouts/app')

@section('title','Home')

@section('contenido')
<main>
    
    <div class="container py-4">
        <h2>Listado de Productos</h2>

        <button type="submit" class="btn btn-success">Nuevo Registro</button>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Stock</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $producto)
                <tr>
                   <td>{{$producto ->id}}</td>
                   <td>{{$producto ->Producto}}</td>
                   <td>{{$producto ->Precio}}</td>
                   <td>{{$producto ->Stock}}</td>
                </tr>
                @endforeach
            </tbody>
            
        </table>

           
    </div>
</main>
    
@endsection