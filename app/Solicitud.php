<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    public $timestamps = false;
    
    protected $table = 'solicitudes';

    protected $fillable = [
        'nombre', 'descripcion',
    ];

    public function empleados_solicitudes()
    {
        return $this->hasMany('App\Empleado_solicitud');
    }
}
