<?php

use Illuminate\Database\Seeder;
use App\Puesto;

class PuestoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Puesto::create([
            'nombre'=> 'Lider de proyectos',
            'descripcion'=>'Esta a cargo del área de sistemas', 
            'departamento_id'=> 1,
        ]);
        Puesto::create([
            'nombre'=> 'Gerente contable', 
            'descripcion'=>'Esta a cargo del área de contabilidad',
            'departamento_id'=> 2,
        ]);
        Puesto::create([
            'nombre'=> 'Administrador',
            'descripcion'=>'Cumple tareas administrativas',
            'departamento_id'=> 3,
        ]);
        Puesto::create([
            'nombre'=> 'Gerente de ventas',
            'descripcion'=>'Esta a cargo de las ventas',
            'departamento_id'=> 4,
        ]);
        Puesto::create([
            'nombre'=> 'Ingeniero en Sistemas',
            'descripcion'=>'Esta al frente de proyectos informáticos',
            'departamento_id'=> 1,
        ]);
    }
}
