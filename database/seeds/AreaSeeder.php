<?php

use Illuminate\Database\Seeder;
use App\Area;
class AreaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Area::create([
            'nombre'  => 'Sistemas Informáticos',
            'descripcion' => 'En esta área se desempeñan los programadores y analistas',
            'empresa_id' => 1,   
        ]);
        Area::create([
            'nombre'  => 'Contabilidad',
            'descripcion' => 'En esta área se llevan a cabo liquidaciones de sueldo',
            'empresa_id' => 1,   
        ]);
        Area::create([
            'nombre'  => 'Administración',
            'descripcion' => 'En esta área se contamplan las actividades empresariales',
            'empresa_id' => 1,   
        ]);
        Area::create([
            'nombre'  => 'Post-Venta',
            'descripcion' => 'En esta área se contamplan las actividades de marketing y atención al cliente',
            'empresa_id' => 1,   
        ]);
        
    }
}

