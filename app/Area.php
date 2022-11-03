<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nombre', 'descripcion', 'empresa_id',
    ];
    
    public function empresas()
    {
        return $this->belongsTo('App\Empresa');
    }
    public function departamentos()
    {
        return $this->hasMany('App\Departamento');
    }
   
    
}

