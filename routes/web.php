<?php



Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
      return view('dashboard');
  });

Route::prefix('areas')->group(function() {

    Route::get('/', 'AreaController@index')->name('areas');

    Route::get('crear', 'AreaController@crear')->name('areas.crear');

    Route::post('crear', 'AreaController@almacenar'); /* recicla el nombre de la anterior, se diferencian en el verbo http */

    Route::get('editar/{area}', 'AreaController@editar')
          ->where('area', '[0-9]+')->name('areas.editar');

    Route::put('editar/{area}', 'AreaController@actualizar')
          ->where('area', '[0-9]+'); /* el where limita que el parametro sea solo nro */

    Route::delete('eliminar/{area}', 'AreaController@eliminar')
          ->where('area', '[0-9]+')->name('areas.eliminar');
});
Route::prefix('empleados')->group(function() {

      Route::get('/', 'EmpleadoController@index')->name('empleados');
  
      Route::get('crear', 'EmpleadoController@crear')->name('empleados.crear');
  
      Route::post('/crear', 'EmpleadoController@almacenar'); /* recicla el nombre de la anterior, se diferencian en el verbo http */
  
      Route::get('editar/{empleado}', 'EmpleadoController@editar')
            ->where('empleado', '[0-9]+')->name('empleados.editar');
  
      Route::put('editar/{empleado}', 'EmpleadoController@actualizar')
            ->where('empleado', '[0-9]+'); /* el where limita que el parametro sea solo nro */
  
      Route::delete('eliminar/{empleado}', 'EmpleadoController@eliminar')
            ->where('empleado', '[0-9]+')->name('empleados.eliminar');
  });
  Route::prefix('departamentos')->group(function() {

      Route::get('/', 'DepartamentoController@index')->name('departamentos');
  
      Route::get('crear', 'DepartamentoController@crear')->name('departamentos.crear');
  
      Route::post('crear', 'DepartamentoController@almacenar'); /* recicla el nombre de la anterior, se diferencian en el verbo http */
  
      Route::get('editar/{departamento}', 'DepartamentoController@editar')
            ->where('departamento', '[0-9]+')->name('departamentos.editar');
  
      Route::put('editar/{departamento}', 'DepartamentoController@actualizar')
            ->where('departamento', '[0-9]+'); /* el where limita que el parametro sea solo nro */
  
      Route::delete('eliminar/{departamento}', 'DepartamentoController@eliminar')
            ->where('departamento', '[0-9]+')->name('departamentos.eliminar');
  });
  Route::prefix('datos')->group(function() {

      Route::get('/', 'DatosController@index')->name('datos');
  
      Route::get('crear', 'DatosController@crear')->name('datos.crear');
  
      Route::post('crear', 'DatosController@almacenar'); /* recicla el nombre de la anterior, se diferencian en el verbo http */
  
      Route::get('editar/{dato}', 'DatosController@editar')
            ->where('datos', '[0-9]+')->name('datos.editar');
  
      Route::put('editar/{dato}', 'DatosController@actualizar')
            ->where('datos', '[0-9]+'); /* el where limita que el parametro sea solo nro */
  
      Route::delete('eliminar/{dato}', 'DatosController@eliminar')
            ->where('datos', '[0-9]+')->name('datos.eliminar');
  });
  Route::prefix('puestos')->group(function() {

      Route::get('/', 'PuestosController@index')->name('puestos');
  
      Route::get('crear', 'PuestosController@crear')->name('puestos.crear');
  
      Route::post('crear', 'PuestosController@almacenar'); /* recicla el nombre de la anterior, se diferencian en el verbo http */
  
      Route::get('editar/{puesto}', 'PuestosController@editar')
            ->where('puestos', '[0-9]+')->name('puestos.editar');
  
      Route::put('editar/{puesto}', 'PuestosController@actualizar')
            ->where('puestos', '[0-9]+'); /* el where limita que el parametro sea solo nro */
  
      Route::delete('eliminar/{puesto}', 'PuestosController@eliminar')
            ->where('puestos', '[0-9]+')->name('puestos.eliminar');
  });
   /*Para generar el PDF
   Route::get('asistencias/pdf', 'asistenciasController@pdf')->name('asistencias.pdf');
    */