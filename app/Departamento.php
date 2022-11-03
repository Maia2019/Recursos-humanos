<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nombre', 'descripcion', 'area_id',
    ];
    
    public function areas()
    {
        return $this->belongsTo('App\Area');
    }
    public function puestos()
    {
        return $this->hasMany('App\Puesto');
    }
    public function empleados()
    {
        return $this->hasMany('App\Empleado');
    }
}
