<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('sexo');
            $table->unsignedBigInteger('dni');
            $table->date('fecha_nacimiento')->nullable();
            $table->string('direccion');
            $table->string('cuil');
            $table->date('fecha_ingreso')->nullable();
            $table->date('fecha_egreso')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('puesto_id');
            $table->string('descripcion');
            $table->string('cuenta_bancaria');
            $table->string('informacion_general');
            $table->date('horario_de_trabajo')->nullable();
            $table->double('salario')->nullable();
            $table->double('compensaciones')->nullable();
            $table->unsignedBigInteger('departamento_id')->nullable();
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
