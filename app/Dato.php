<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dato extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'informacion_general',
        'puesto',
        'horario_de_trabajo',
        'salario',
        'compensaciones',
        'empleado_id',
    ];
    
    public function empleados()
    {
        return $this->belongsTo('App\Empleado');
    }
}
