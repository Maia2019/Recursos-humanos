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