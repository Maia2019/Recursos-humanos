<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;
use App\Http\Requests\AreaRequest;

class AreaController extends Controller
{
    public function index()
    {
        $areas = Area::all();

        return view('empresa.areas.index', compact('areas'));
    }

    public function crear()
    {
        return view('areas.crear');
    }

    public function almacenar(AreaRequest $request)
    {
        Area::create($request->all());
        return redirect()->route('areas')->with('message', 'Registro creado exitosamente.');
    }

    public function editar(Area $area)
    {
        return view('areas.editar', compact('area'));
    }

    public function actualizar(AreaRequest $request, Area $area)
    {
        $area->update($request->all());
        return redirect()->route('areas')->with('message', 'Registro modificado exitosamente');
    }
}


