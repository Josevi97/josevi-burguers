<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;

class Carrito extends Model
{
    public $timestamps = false;

    public function producto() {
        return $this->hasOne(Producto::class, 'id', 'id_producto');
    }
}
