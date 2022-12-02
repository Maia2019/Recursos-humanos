<?php

namespace App\Http\Controllers;

use App\Puesto;
use Illuminate\Http\Request;
use App\Http\Requests\PuestoRequest;


class PuestoController extends Controller
{ public function index()
    {
        $puestos = Puesto::all();

        return view('empresa.puestos.index', compact('puestos'));
    }

    public function crear()
    {
        return view('empresa.puestos.crear');
    }

    public function almacenar(PuestoRequest $request)
    {
        Puesto::create([
            'nombre'=> $request->nombre,
            'descripcion'=>$request->descripcion, 
            'departamento_id'=> $request->departamento_id,
        ]);
       
        return redirect()->route('puestos')->with('message', 'Registro creado exitosamente.');
    }
    
    public function editar(Puesto $puesto)
    {
        return view('empresa.puestos.editar', compact('puesto'));
    }

    public function actualizar(PuestoRequest $request, Puesto $puesto)
    {
        $puesto->update($request->all());
        return redirect()->route('puestos')->with('message', 'Registro modificado exitosamente');
    }
    public function eliminar($id)
    {
        Puesto::destroy($id);
        return redirect()->route('puestos')->with('message', 'Registro eliminado');

        //Funciona!
    }
}
