<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('areas', function (Blueprint $table) {
            
            $table->foreign('empresa_id')->references('id')->on('empresas');
        
        });
        Schema::table('empleados', function (Blueprint $table) {
            
            $table->foreign('departamento_id')->references('id')->on('departamentos');
    
        });
        Schema::table('puestos', function (Blueprint $table) {
            
            $table->foreign('area_id')->references('id')->on('areas');
    
        });

       
    
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foreign_keys');
    }
}
