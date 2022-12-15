<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solucitud extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nombre', 'descripcion'
    ];

    public function empleados_solicitudes()
    {
        return $this->hasMany('App\Empleado_solicitud');
    }
}
