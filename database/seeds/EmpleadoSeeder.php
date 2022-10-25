<?php

use Illuminate\Database\Seeder;
use App\Empleado;
class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empleado::create([
            'nombre'  => 'Roberto Gómez',
            'descripcion' => 'Programador',
        ]);
        Empleado::create([
            'nombre'  => 'Tatiana Suarez',
            'descripcion' => 'Contadora',
              
        ]);
        Empleado::create([
            'nombre'  => 'Carlos Pereira',
            'descripcion' => 'Administrativo',
              
        ]);
        Empleado::create([
            'nombre'  => 'Lucia Ríos',
            'descripcion' => 'Lic.Marketing',
              
        ]);
        
    }
}

