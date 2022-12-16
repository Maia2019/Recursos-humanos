@extends('layouts.app')

@section('titulo', 'Editar empleado')

@section('contenido')

<div class="container">
    <div class="col-4 mx-auto">
        <form class="card" action="{{route('empleados.editar', $empleado)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="card-header">
                Editar empleado
            </div>

            <div class="card-body">
                <div class="text-danger mb-3 small">(*) Campo obligatorio</div>

                <div class="form-group">
                    <label for="nombre">Nombre<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('nombre') is-invalid @enderror"
                    name="nombre" value="{{old('nombre', $solicitudes->nombre)}}">

                    @error('nombre')
                      <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('descripcion') is-invalid @enderror"
                    name="descripcion" value="{{old('descripcion', $solicitudes->descripcion)}}" >

                    @error('descripcion')
                      <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group"> 
                    <label for="fecha_desde">fecha de inicio<span class="text-danger">*</span></label>
                    <input type="date" class="form-control @error('fecha_desde') is-invalid @enderror"
                    name="fecha_desde" value="{{old('fecha_desde', $solicitudes->fecha_desde)}}" >

                    @error('fecha_desde')
                      <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group"> 
                    <label for="fecha_hasta">fecha de finalizacion<span class="text-danger">*</span></label>
                    <input type="date" class="form-control @error('fecha_hasta') is-invalid @enderror"
                    name="fecha_hasta" value="{{old('fecha_hasta', $solicitudes->fecha_hasta)}}">

                    @error('fecha_hasta')
                      <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group"> 
                <select class="custom-select" size="3">
                  <option selected>Seleccione el estado</option>
                  <option value="{{old('estado', $solicitudes->estado)}}">Cumplido</option>
                  <option value="{{old('estado', $solicitudes->estado)}}">No cumplido</option>
                </select>

                </div>
                <div class="form-group {{ $errors->has('empleado_id') ? 'has-error' : ''}}">
                        <label for="empleado_id" class="control-label">{{ 'Puesto' }}</label>
                        <select name="empleado_id" id="empleado_id" class="custom-select">
                            <option value="">Seleccione un empleado</option><!--como no tiene value me pide un required en el controlador-->
                            @foreach ($empleados as $e)
                                <option value="{{old('empleado', $e->id)}}"> {{$e->nombre}}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('empleado_id', '<p class="help-block">:message</p>') !!}
                </div>
                <div class="form-group {{ $errors->has('solicitud_id') ? 'has-error' : ''}}">
                        <label for="solicitud_id" class="control-label">{{ 'Puesto' }}</label>
                        <select name="solicitud_id" id="solicitud_id" class="custom-select">
                            <option value="">Seleccione una solicitud</option><!--como no tiene value me pide un required en el controlador-->
                            @foreach ($solicitudes as $s)
                                <option value="{{old('solicitud', $s->id)}}"> {{$s->nombre}}</option>
                            @endforeach
                        </select>
                        {!! $errors->first('solicitud_id', '<p class="help-block">:message</p>') !!}
                </div>
                <div class="d-flex justify-content-center mt-4 ">
                    <button type="submit" class="btn btn-primary mx-2">Editar empleado</button>
                    <a href="{{route('empleados')}}" class="btn btn-secondary mx-2">Volver</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
