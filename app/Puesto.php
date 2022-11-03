<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nombre', 'descripcion', 'departamento_id',
    ];
    
    public function departamentos()
    {
        return $this->belongsTo('App\Departamento');
    }
}
