<?php

use Illuminate\Database\Seeder;
use App\Empresa;

class EmpresaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Empresa::create([
            'nombre'  => 'Empresa JOrge',
            'domicilio' => 'alvear',
            
        ]);
    }
}
