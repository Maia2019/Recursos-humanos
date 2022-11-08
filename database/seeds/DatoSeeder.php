<?php

use Illuminate\Database\Seeder;
use App\Dato;

class DatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Dato::create([
            'informacion_general'=>'Tiene hijos, y vive en Posadas',
            'puesto'=>'Ingeniero en Sistemas',
            'horario_de_trabajo'=>'2019-11-04',
            'salario'=>'20000',
            'compensaciones'=>'1000',
            'empleado_id'=>null,
        ]);
        
        
    }
}

