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
       
        Schema::table('departamentos', function (Blueprint $table) {
            
            $table->foreign('area_id')->references('id')->on('areas');
    
        });

        Schema::table('puestos', function (Blueprint $table) {
            
            $table->foreign('departamento_id')->references('id')->on('departamentos');
    
        });
       
        Schema::table('empleados', function (Blueprint $table) {
            
            //$table->foreign('puesto_id')->references('id')->on('puestos');
            $table->foreign('departamento_id')->references('id')->on('departamentos');
    
        });
       /* Schema::table('empleado_solicitudes', function (Blueprint $table) {
            
            $table->foreign('empleado_id')->references('id')->on('empleados');
            $table->foreign('solicitud_id')->references('id')->on('solicitudes');
        });

        
       */
    
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
