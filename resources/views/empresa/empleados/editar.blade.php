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
                    name="nombre" value="{{old('nombre', $empleado->nombre)}}" maxlength="50">

                    @error('nombre')
                      <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="apellido">apellido<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('apellido') is-invalid @enderror"
                    name="apellido" value="{{old('apellido', $empleado->apellido)}}" >

                    @error('apellido')
                      <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="sexo">sexo<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('sexo') is-invalid @enderror"
                    name="sexo" value="{{old('sexo', $empleado->sexo)}}" >

                    @error('sexo')
                      <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="dni">dni<span class="text-danger">*</span></label>
                    <input type="number" class="form-control @error('dni') is-invalid @enderror"
                    name="dni" value="{{old('dni', $empleado->dni)}}" >

                    @error('dni')
                      <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="fecha_nacimiento">fecha de nacimiento<span class="text-danger">*</span></label>
                    <input type="date" class="form-control @error('fecha_nacimiento') is-invalid @enderror"
                    name="fecha_nacimiento" value="{{old('fecha_nacimiento', $empleado->fecha_nacimiento)}}" >

                    @error('fecha_nacimiento')
                      <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                      </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="direccion">dirección<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('direccion') is-invalid @enderror"
                    name="direccion" value="{{old('direccion', $empleado->direccion)}}" >

                    @error('direccion')
                      <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="cuil">cuil<span class="text-danger">*</span></label>
                    <input type="number" class="form-control @error('cuil') is-invalid @enderror"
                    name="cuil" value="{{old('cuil', $empleado->cuil)}}" >

                    @error('cuil')
                      <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="fecha_ingreso">fecha de ingreso<span class="text-danger">*</span></label>
                    <input type="date" class="form-control @error('fecha_ingreso') is-invalid @enderror"
                    name="fecha_ingreso" value="{{old('fecha_ingreso', $empleado->fecha_ingreso)}}" >

                    @error('fecha_ingreso')
                      <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="fecha_egreso">fecha de egreso<span class="text-danger">*</span></label>
                    <input type="date" class="form-control @error('fecha_egreso') is-invalid @enderror"
                    name="fecha_egreso" value="{{old('fecha_egreso', $empleado->fecha_egreso)}}" >

                    @error('fecha_egreso')
                      <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email">email<span class="text-danger">*</span></label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{old('email', $empleado->email)}}" >

                    @error('email')
                      <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="puesto">Puesto<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('puesto') is-invalid @enderror"
                    name="puesto" value="{{old('puesto', $empleado->puesto)}}" >

                    @error('puesto')
                      <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="descripcion">Descripcion<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('descripcion') is-invalid @enderror"
                    name="descripcion" value="{{old('descripcion', $empleado->descripcion)}}" maxlength="50">

                    @error('descripcion')
                      <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                      </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="cuenta_bancaria">Banco<span class="text-danger">*</span></label>
                    <input type="text" class="form-control @error('cuenta_bancaria') is-invalid @enderror"
                    name="cuenta_bancaria" value="{{old('cuenta_bancaria', $empleado->cuenta_bancaria)}}" >

                    @error('cuenta_bancaria')
                      <span class="invalid-feedback" role="alert">
                            <strong>{{$message}}</strong>
                      </span>
                    @enderror
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
