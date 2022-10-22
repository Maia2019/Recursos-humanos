<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nombre', 'descripcion', 'empresa_id',
    ];
    
    public function empresa()
    {
        return $this->belongsTo('App\Empresa');
    }

    
}

