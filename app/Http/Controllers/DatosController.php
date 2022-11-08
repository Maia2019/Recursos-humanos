<?php

namespace App\Http\Controllers;

use App\Dato;
use App\Http\Requests\DatoRequest;
use Illuminate\Http\Request;

class DatosController extends Controller
{
    public function index()
    {
        $datos = Dato::all();

        return view('empresa.datos.index', compact('datos'));
    }

    public function crear()
    {
        return view('empresa.datos.crear');
    }

    public function almacenar(DatoRequest $request)
    {
        Dato::create([
            'informacion_general' =>$request->informacion_general,
            'puesto' =>$request->puesto,
            'horario_de_trabajo' =>$request->horario_de_trabajo,
            'salario' =>$request->salario,
            'compensaciones' =>$request->compensaciones,
        ]);
        return redirect()->route('datos')->with('message', 'Registro creado exitosamente.');
    }
    
    public function editar(Dato $dato)
    {
        return view('empresa.datos.editar', compact('dato'));
    }

    public function actualizar(DatoRequest $request, Dato $dato)
    {
        $dato->update($request->all());
        return redirect()->route('datos')->with('message', 'Registro modificado exitosamente');
    }
    public function eliminar($id)
    {
        Dato::destroy($id);
        return redirect()->route('datos')->with('message', 'Registro eliminado');

        //Funciona!
    }
    
}
