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
        'puesto',
        'cuenta_bancaria',
        'departamento_id',
    ];
   
    public function departamentos()
    {
        return $this->belongsTo('App\Departamento');
    }
}
