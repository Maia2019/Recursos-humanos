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
            'nombre' => 'Roberto',
            'apellido' => 'Gómez',
            'sexo' => 'Masculino',
            'dni' => 22789664,
            'fecha_nacimiento' => '2019-11-04',
            'direccion' => 'Felix de Azara 3548', 
            'cuil' => 20227896644,
            'fecha_ingreso' => '2019-11-04',
            'fecha_egreso' => '2019-11-04',
            'email' => 'robertogomez@hotmail.com', 
            'puesto' => 'Ingeniero en Sistemas',
            'descripcion' => 'Debe dirigir equipos de desarrollo',
            'cuenta_bancaria' => 'BANCO NACION - BCRA',
            'departamento_id' => null,
            
        ]);
        Empleado::create([
            'nombre'  => 'Tatiana',
            'apellido' => 'Suarez',
            'sexo' => 'Femenino',
            'dni' => 32789664,
            'fecha_nacimiento' => '2019-11-04',
            'direccion' => 'Felix de Azara 3548', 
            'cuil' => 20327896644,
            'fecha_ingreso' => '2019-11-04',
            'fecha_egreso' => '2019-11-04',
            'email' => 'tatisuarez@gmail.com', 
            'puesto' => 'Jefa de departamento en administración',
            'descripcion' => 'Debe dirigir equipos administrativos',
            'cuenta_bancaria' => 'BANCO NACION - BCRA',
            'departamento_id' => null,
              
        ]);
        Empleado::create([
            'nombre'  => 'Carlos',
            'apellido' => 'Pereira',
            'sexo' => 'Masculino',
            'dni' => 35789664,
            'fecha_nacimiento' => '2019-11-04',
            'direccion' => 'Felix de Azara 3548', 
            'cuil' => 20357896644,
            'fecha_ingreso' => '2019-11-04',
            'fecha_egreso' => '2019-11-04',
            'email' => 'carlopereyra@hotmail.com', 
            'puesto' => 'Jefe de división Informática',
            'descripcion' => 'Se encarga de organizar las tareas del ingeniero',
            'cuenta_bancaria' => 'BANCO Brubank',
            'departamento_id' => null,
              
        ]);
        Empleado::create([
            'nombre'  => 'Lucia',
            'apellido' => 'Ríos',
            'sexo' => 'Femenino',
            'dni' => 30789664,
            'fecha_nacimiento' => '2019-11-04',
            'direccion' => 'Felix de Azara 3548', 
            'cuil' => 20307896644,
            'fecha_ingreso' => '2019-11-04',
            'fecha_egreso' => '2019-11-04',
            'email' => 'luurios@hotmail.com', 
            'puesto' => 'Project Leader',
            'descripcion' => 'Se encarga de dirigir a los equipos de proyectos de desarrollo web',
            'cuenta_bancaria' => 'BANCO Brubank',
            'departamento_id' => null,
              
        ]);
        
    }
}

