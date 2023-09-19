<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class ProductsController extends Controller
{
    public function index(){
        $productos= Producto::all();
        return view('productos.index',compact('productos'));
    }

    public function create(){
        return view('productos.create');
    }


}
