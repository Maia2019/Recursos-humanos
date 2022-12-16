<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    public $timestamps = false;
    protected $table = 'empresas';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nombre', 'domicilio',
    ];

    public function areas()
    {
        return $this->hasMany('App\Area');
    }
}

