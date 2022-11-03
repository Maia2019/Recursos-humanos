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