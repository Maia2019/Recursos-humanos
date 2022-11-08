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
        $datos=new Dato;
        $datos->informacion_general=$request->get('informacion_general');
        $datos->puesto=$request->get('puesto');
        $datos->horario_de_trabajo=$request->get('horario_de_trabajo');
        $datos->salario=$request->get('salario');
        $datos->compensaciones=$request->get('compensaciones');
      
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
