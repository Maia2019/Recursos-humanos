@extends('layouts.app')

@section('titulo', 'empleados')

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
@endsection

@section('js')

    <script>
        $(document).ready(function() {

            $('#empleados').DataTable({

                aaSorting: [], /*para que se muestre en el mismo orden que viene del controlador*/

                columnDefs: [
                    {
                        targets: 1,
                        className: 'dt-center',
                    }
                ],

                language: {
                    "sProcessing":     "Procesando...",
                    "sLengthMenu":     "Mostrar _MENU_ registros",
                    "sZeroRecords":    "No se encontraron resultados",
                    "sEmptyTable":     "Ningún dato disponible en esta tabla",
                    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
                    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
                    "sInfoPostFix":    "",
                    "sSearch":         "Buscar:",
                    "sUrl":            "",
                    "sInfoThousands":  ",",
                    "sLoadingRecords": "Cargando...",
                    "oPaginate": {
                        "sFirst":    "Primero",
                        "sLast":     "Último",
                        "sNext":     "Siguiente",
                        "sPrevious": "Anterior"
                    },
                    "oAria": {
                        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
                    }
                }
            });
        } );
    </script>
@endsection

@section('contenido')

    <div class="container-fluid">
        <div class="row">
            <div class="h2 col"><a href="/" class="btn btn-primary mx-2">
                <i class="fas fa-arrow-left"></i> Volver</a>    
                Gestión de empleados
            </div>
            <div class="col-auto">
                <a href="{{route('empleados.crear')}}" class="btn button-login px-3 float-right" data-toggle="tooltip" data-placement="left" title="Crear rubro">
                    <i class="fas fa-plus" style="margin-top: 9px;"></i>
                </a>
            </div>
        </div>
    </div>
   
    <div class="container-fluid">
        @include ('layouts.mensaje')
        <div class="container-fluid mt-3">
            <table id="empleados" class="display responsive nowrap w-100">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Dni</th>
                        <th>Acciones</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($empleados as $a)
                    <tr>
                        <td>{{$a->nombre}}</td>
                        <td>{{$a->apellido}}</td>
                        <td>{{$a->dni}}</td>

                        <td>
                            <a href="{{route('empleados.editar', $a->id)}}" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Editar empleado"><i class="fas fa-pencil-alt fa-fw"></i></a>
                            <form class="d-inline" action="{{route('empleados.eliminar', $a->id)}}" method="POST">
                                @csrf
                                @method ('DELETE')
                                <button type="submit" class="btn btn-danger m-1" data-toggle="tooltip" data-placement="top" title="Eliminar rubro"
                                onclick="return confirm ('¿Está seguro de que desea eliminar el registro?')"><i class="fas fa-trash-alt fa-fw"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
