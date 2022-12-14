<?php

namespace App\Http\Controllers;
use DB;

use App\Empleado;
use Illuminate\Http\Request;
use App\Http\Requests\EmpleadoRequest;
//use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade as PDF;
//use \PDF;
//use Barryvdh\DomPDF\Facade\PDF;


class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request)
        {   
            $query=trim($request->get('searchText'));
            $empleado= DB::table('empleados')
            ->where('nombre','LIKE','%'.$query.'%')
            ->orWhere('apellido','LIKE','%'.$query.'%')
            ->orWhere('dni','LIKE','%'.$query.'%')
            ->orderBy('nombre','asc')
            /* tengo problemas con el orderBy y opte por el sortBy pero no resulta.*/
            ->paginate(7);
            return view('empresa.empleados.index',['empleados'=>$empleado,"searchText"=>$query]);
        }
        //$empleados = Empleado::all();

        return view('empresa.empleados.index', compact('empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crear()
    {
        return view('empresa.empleados.crear');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function almacenar(EmpleadoRequest $request)
    {
        /*Empleado::create([
        'nombre' =>$request->nombre,
        'apellido'=>$request->apellido,
        'sexo'=>$request->sexo,
        'dni'=>$request->dni,
        'fecha_nacimiento'=>$request->fecha_nacimiento,
        'direccion'=>$request->direccion, 
        'cuil'=>$request->cuil,
        'fecha_ingreso'=>$request->fecha_ingreso,
        'fecha_egreso'=>$request->fecha_egreso,
        'email'=>$request->email, 
        'puesto'=>$request->puesto,
        'cuenta_bancaria'=>$request->cuenta_bancaria,*/
        //'departamento_id'=>$request->nombre,
        $empleado=new Empleado;
        $empleado->nombre=$request->get('nombre');
        $empleado->apellido=$request->get('apellido');
        $empleado->sexo=$request->get('sexo');
        $empleado->dni=$request->get('dni');
        $empleado->fecha_nacimiento=$request->get('fecha_nacimiento');
        $empleado->direccion=$request->get('direccion');
        $empleado->cuil=$request->get('cuil');
        $empleado->fecha_ingreso=$request->get('fecha_ingreso');
        $empleado->fecha_egreso=$request->get('fecha_egreso');
        $empleado->email=$request->get('email');
        $empleado->puesto=$request->get('puesto');
        $empleado->descripcion=$request->get('descripcion');
        $empleado->cuenta_bancaria=$request->get('cuenta_bancaria');



        $empleado->save();
    //]);
    return redirect()->route('empleados')->with('message', 'Registro creado exitosamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Empleado  s
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Empleado  s
     * @return \Illuminate\Http\Response
     */
    public function editar(Empleado $empleado)
    {
        return view('empresa.empleados.editar', compact('empleado'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Empleado  s
     * @return \Illuminate\Http\Response
     */
    public function actualizar(Request $request, Empleado $empleado)
    {
        $empleado->update($request->all());
        return redirect()->route('empleados')->with('message', 'Registro modificado exitosamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Empleado  s
     * @return \Illuminate\Http\Response
     */
    public function eliminar($id)
    {
        Empleado::destroy($id);
        return redirect()->route('empleados')->with('message', 'Registro eliminado');

        //Empleado $empleado Funciona!
    }
    // HACER PDF 
    public function pdf() //pdf
    {    
         $empleados=Empleado::all();
        
         $pdf=PDF::loadView('empresa.empleados.pdf',compact('empleados'));//['empleados'=>$empleados]
         $pdf->setPaper('a4','letter');
            /*
            $pdf = PDF::loadView('pdf.report');
            return $pdf->stream('report.pdf', array('Attachment' => 0));
            */
        return $pdf->download('empleados/pdf'); //Sirve para previsualizar la descarga
        //return view('empresa.empleados.crear');

    }
}
