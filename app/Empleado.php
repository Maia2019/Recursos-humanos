<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    public $timestamps = false;
    
    protected $fillable = [
        'nombre',
        'apellido',
        'sexo',
        'dni',
        'fecha_nacimiento',
        'direccion', 
        'cuil',
        'fecha_ingreso',
        'fecha_egreso',
        'email', 
        'puesto_id',
        'descripcion',
        'cuenta_bancaria',
        'informacion_general',
        'horario_de_trabajo',
        'salario',
        'compensaciones',
        'departamento_id',
    ];
   
    public function departamentos()
    {
        return $this->belongsTo('App\Departamento');
    }
    public function puesto()
    {
        return $this->belongsTo('App\Puesto');
    }
    public function empleados_solicitudes()
    {
        return $this->hasMany('App\Empleado_solicitud');
    }
}
