<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Puesto extends Model
{
    public $timestamps = false;
    
    protected $table = 'puestos';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre_puesto', 'descripcion', 'departamento_id',
    ];
    
    public function departamentos()
    {
        return $this->belongsTo('App\Departamento');
    }
    
}
