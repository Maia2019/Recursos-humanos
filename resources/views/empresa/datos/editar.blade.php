@extends('layouts.app')

@section('titulo', 'Editar dato')

@section('contenido')

<div class="container">
    <div class="col-4 mx-auto">
        <form class="card" action="{{route('datos.editar', $dato)}}" method="POST">
            @csrf
            @method('PUT')

            <div class="card-header">
                Editar dato
            </div>

            <div class="card-body">
                <div class="text-danger mb-3 small">(*) Campo obligatorio</div>

                <div class="form-group">
                    <label for="informacion_general">Informacion general<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('informacion_general') is-invalid @enderror"
                    name="informacion_general" value="{{old('informacion_general', $dato->informacion_general)}}" maxlength="50">

                    @error('informacion_general')
                      <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                      </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="puesto">Puesto<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('puesto') is-invalid @enderror"
                    name="puesto" value="{{old('puesto', $dato->puesto)}}" maxlength="50">

                    @error('puesto')
                      <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="horario_de_trabajo">Horario de trabajo<span class="text-danger">*</span></label>
                    <input type="date" class="form-control @error('horario_de_trabajo') is-invalid @enderror"
                    name="horario_de_trabajo" value="{{old('horario_de_trabajo', $dato->horario_de_trabajo)}}" maxlength="50">

                    @error('horario_de_trabajo')
                      <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="salario">Salario<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('salario') is-invalid @enderror"
                    name="salario" value="{{old('salario', $dato->salario)}}" maxlength="50">

                    @error('salario')
                      <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="compensaciones">Compensaciones<span class="text-danger">*</span></label>
                    <input type="number" class="form-control @error('compensaciones') is-invalid @enderror"
                    name="compensaciones" value="{{old('compensaciones', $dato->compensaciones)}}" maxlength="50">

                    @error('compensaciones')
                      <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                      </span>
                    @enderror
                </div>

                <div class="d-flex justify-content-center mt-4 ">
                    <button type="submit" class="btn btn-primary mx-2">Editar dato</button>
                    <a href="{{route('datos')}}" class="btn btn-secondary mx-2">Volver</a>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
