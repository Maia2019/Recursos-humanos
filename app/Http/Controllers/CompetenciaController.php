<?php

namespace App\Http\Controllers;

use App\Competencia;
use Illuminate\Http\Request;

class CompetenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Competencia  $competencia
     * @return \Illuminate\Http\Response
     */
    public function show(Competencia $competencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Competencia  $competencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Competencia $competencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Competencia  $competencia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Competencia $competencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Competencia  $competencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Competencia $competencia)
    {
        //
    }
    /* HACER PDF 
    public function pdf() //pdf
    {    
         $alumnos=Alumno::all();
        
         $pdf=PDF::loadView('asistencias.pdf',compact('alumnos'));//['alumnos'=>$alumnos]
         $pdf->setPaper('a4','letter');
   
        return $pdf->stream('asistencias/pdf'); //Sirve para previsualizar la descarga
    }*/
}
