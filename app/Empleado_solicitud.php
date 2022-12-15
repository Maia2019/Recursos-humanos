<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado_solicitud extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nombre', 'descripcion', 'empleado_id', 'solicitud_id'
    ];
    
    public function empleados()
    {
        return $this->belongsTo('App\Empleado');
    }
    public function solicitudes()
    {
        return $this->belongsTo('App\Solicitud');
    }
    
}
