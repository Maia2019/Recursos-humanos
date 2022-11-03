@extends('layouts.app')

@section('titulo', 'Crear departamento')

@section('contenido')

<div class="container">
    <div class="col-4 mx-auto">
        <form class="card" action="{{route('departamentos.crear')}}" method="POST">
            @csrf

            <div class="card-header">
                Crear departamento
            </div>

            <div class="card-body">
                <div class="text-danger mb-3 small">(*) Campo obligatorio</div>

                <div class="form-group">
                    <label for="nombre">Nombre<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('nombre') is-invalid @enderror"
                    name="nombre" value="{{old('nombre')}}" maxlength="50">

                    @error('nombre')
                      <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                      </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="descripcion">Descripción<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('descripcion') is-invalid @enderror"
                    name="descripcion" value="{{old('descripcion')}}" maxlength="50">

                    @error('descripcion')
                      <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                      </span>
                    @enderror
                </div>


                <div class="d-flex justify-content-center mt-4 ">
                    <button type="submit" class="btn btn-primary mx-2">Crear departamento</button>
                    <a href="{{route('departamentos')}}" class="btn btn-secondary mx-2">Volver</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
