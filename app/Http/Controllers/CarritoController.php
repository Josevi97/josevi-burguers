<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrito;

class CarritoController extends Controller
{
    public function index() {
        $carritos = Carrito::all();
        $total = 0;

        if ($carritos->count() == 0) 
            return redirect()->to('/');

        foreach($carritos as $carrito) {
            $total += $carrito->producto->precio;
        }

        return view('carrito', compact('carritos', 'total'));
    }

    public function add_producto($id) {
        $carrito = new Carrito;
        $carrito->id_producto = $id;
        $carrito->save();

        return redirect()->to('carrito');
    }

    public function eliminar_producto($id) {
        Carrito::find($id)->delete();
        $route = Carrito::all()->count() == 0 ? '/' : 'carrito';

        return redirect()->to($route);
    }

    public function limpiar_carrito() {
        Carrito::truncate();

        return redirect()->to('/');
    }

    public function comprar_productos() {
        $carritos = Carrito::all();
        $total = 0;

        foreach($carritos as $carrito) {
            $total += $carrito->producto->precio;
        }

        return view('compra', compact('carritos', 'total'));
    }
}
