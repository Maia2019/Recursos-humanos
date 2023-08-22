<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;
use App\Http\Requests\AreaRequest;

class AreaController extends Controller
{
    public function index()
    {
        //
         }

    public function crear()
    {
        //
    }

    public function almacenar(AreaRequest $request)
    {
        //    
    }

    public function editar(Area $area)
    {
        return view('empresa.areas.editar', compact('area'));
    }

    public function actualizar(AreaRequest $request, Area $area)
    {
       //
    }
}


