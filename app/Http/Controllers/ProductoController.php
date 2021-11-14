<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Producto;

class ProductoController extends Controller
{
    public function index() {
        $productos = Producto::all();
        return view('productos', compact('productos'));
    }

    public function producto($id) {
        $producto = Producto::find($id);
        return view('producto', compact('producto'));
    }

    public function add($producto) {
        echo $producto->nombre;
    }
}
