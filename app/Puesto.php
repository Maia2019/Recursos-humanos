<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nombre', 'descripcion', 'area_id',
    ];
    
    public function areas()
    {
        return $this->belongsTo('App\Area');
    }
}
