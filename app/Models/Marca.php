<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    use HasFactory;

    //Relación con productos 1 - M

    public function productos () {

        // Retorna los productos de la marca

        return $this -> hasMany(Producto::class);
    }
}
