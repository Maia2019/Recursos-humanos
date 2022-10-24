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
            'nombre'  => 'sistemas',
            'descripcion' => 'hola',
            'empresa_id' => 1,   
        ]);
    }
}
