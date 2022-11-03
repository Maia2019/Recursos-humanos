<?php

use Illuminate\Database\Seeder;
use App\Departamento;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departamento::create([
            'nombre'  => 'Sistemas',
            'descripcion' => 'Registros de programadores y analistas',
            'area_id' => 1,   
        ]);
        Departamento::create([
            'nombre'  => 'Contabilidad',
            'descripcion' => 'Registros contables',
            'area_id' => 2,   
        ]);
        Departamento::create([
            'nombre'  => 'Administración',
            'descripcion' => 'Registros administrativos',
            'area_id' => 3,   
        ]);
        Departamento::create([
            'nombre'  => 'Marketing',
            'descripcion' => 'Contacto con clientes y promociones',
            'area_id' => 4,   
        ]);
    }
}
