<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(EmpresaSeeder::class);
        $this->call(AreaSeeder::class);
        $this->call(EmpleadoSeeder::class);
        $this->call(DepartamentoSeeder::class);
        $this->call(DatoSeeder::class);
        $this->call(PuestoSeeder::class);




    }
}
