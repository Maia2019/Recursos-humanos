<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EmpleadoSolicitud extends Model
{
    public $timestamps = false;
    protected $table = 'empleado_solicitudes';


    protected $fillable = [
        'fecha_desde','fecha_hasta', 'estado', 'empleado_id', 'solicitud_id'
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
