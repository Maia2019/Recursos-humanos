<?php

namespace App\Http\Controllers;
use DB;

use App\Solicitud;
use App\Empleado;
use App\EmpleadoSolucitud;
use Illuminate\Http\Request;

class SolucitudController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
  
        $query=trim($request->get('searchText'));
            $solicitud= DB::table('solicitudes')
            ->where('nombre','LIKE','%'.$query.'%')
            ->orWhere('descripcion','LIKE','%'.$query.'%')
            ->orderBy('nombre','asc')
            /* tengo problemas con el orderBy y opte por el sortBy pero no resulta.*/
            ->paginate(7);
            return view('empresa.solicitudes.index',['solicitudes'=>$solicitud,"searchText"=>$query]);
        
        /*
        $solicitudes = Solicitud::all();

        return view('empresa.solicitudes.index', compact('solicitudes'));*/
    }

    public function crear()
    {
        $solicitudes = Solicitud::all();
        $empleados = Empleado::all();

        return view('empresa.solicitudes.crear', compact('solicitudes','empleados'));
    }

    public function almacenar(SolicitudRequest $request)
    {
        Solicitud::create([
            'nombre' =>$request->nombre,
            'descripcion' =>$request->descripcion,
        ]);
        EmpleadoSolucitud::create([
            'empleado_id'=> $empleado->id, 
            'solicitud_id'=> $solicitud->id,
            'fecha_desde' => now()->format('Y-m-d H:i:s'),
            'fecha_hasta' => now()->format('Y-m-d H:i:s'),
            'estado' => $request->estado,
        ]);

        return redirect()->route('solicitudes')->with('message', 'Registro creado exitosamente.');
    }

    public function editar(Solicitud $solicitud, Empleado $empleado )
    {
        return view('empresa.solicitudes.editar', compact('solicitud','empleado'));
    }

    public function actualizar(SolicitudRequest $request, Solicitud $solicitud)
    {
        $empleados = Empleado::all();
        $empleado->update($request->all());

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
