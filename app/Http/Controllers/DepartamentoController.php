<?php

namespace App\Http\Controllers;

use App\Departamento;
use App\Http\Requests\DepartamentoRequest;
use Illuminate\Http\Request;

class DepartamentoController extends Controller
{
    public function index()
    {
        $departamentos = Departamento::all();

        return view('empresa.departamentos.index', compact('departamentos'));
    }

    public function crear()
    {
        return view('empresa.departamentos.crear');
    }

    public function almacenar(DepartamentoRequest $request)
    {
        Departamento::create([
            'nombre' =>$request->nombre,
            'descripcion' =>$request->descripcion,
            'empresa_id' =>1,
        ]);
        return redirect()->route('departamentos')->with('message', 'Registro creado exitosamente.');
    }

    public function editar(Departamento $departamento)
    {
        return view('empresa.departamentos.editar', compact('departamento'));
    }

    public function actualizar(DepartamentoRequest $request, Departamento $departamento)
    {
        $departamento->update($request->all());
        return redirect()->route('departamentos')->with('message', 'Registro modificado exitosamente');
    }
    public function eliminar($id)
    {
        Departamento::destroy($id);
        return redirect()->route('departamentos')->with('message', 'Registro eliminado');

        //Funciona!
    }
}
