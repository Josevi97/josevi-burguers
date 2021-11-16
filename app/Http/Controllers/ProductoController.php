<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use Illuminate\Http\Request;

use App\Models\Producto;

class ProductoController extends Controller
{
    public function index() {
        $productos = Producto::all();
        $total = 0;

        foreach(Carrito::all() as $carrito) {
            $total += $carrito->producto->precio;
        }

        return view('productos', compact('productos', 'total'));
    }

    public function producto($id) {
        $producto = Producto::find($id);
        return view('producto', compact('producto'));
    }

    public function add($producto) {
        echo $producto->nombre;
    }
}
