<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nombre', 'descripcion',
    ];
}
