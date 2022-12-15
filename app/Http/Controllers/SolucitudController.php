<?php

namespace App\Http\Controllers;

use App\Solucitud;
use Illuminate\Http\Request;

class SolucitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudes = Solicitud::all();

        return view('empresa.solicitudes.index', compact('solicitudes'));
    }

    public function crear()
    {
        return view('empresa.solicitudes.crear');
    }

    public function almacenar(SolicitudRequest $request)
    {
        Solicitud::create([
            'nombre' =>$request->nombre,
            'descripcion' =>$request->descripcion,
            'empresa_id' =>1,
        ]);
        return redirect()->route('solicitudes')->with('message', 'Registro creado exitosamente.');
    }

    public function editar(Solicitud $solicitud)
    {
        return view('empresa.solicitudes.editar', compact('solicitud'));
    }

    public function actualizar(SolicitudRequest $request, Solicitud $solicitud)
    {
        $solicitud->update($request->all());
        return redirect()->route('solicitudes')->with('message', 'Registro modificado exitosamente');
    }
    public function eliminar($id)
    {
        Solicitud::destroy($id);
        return redirect()->route('solicitudes')->with('message', 'Registro eliminado');

        //Funciona!
    }
}
