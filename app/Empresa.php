<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nombre',
    ];

    public function areas()
    {
        return $this->hasMany('App\Area');
    }
}

