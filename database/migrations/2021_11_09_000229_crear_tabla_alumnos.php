<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaAlumnos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->id(); // id-> bigInteger,unsigned,primary key,auto increment
            $table->string('nombre',30)->nullable(); // nombre del alumno
            $table->string('apellidopa',30)->nullable(); //apellido paterno
            $table->string('apellidoma',30)->nullable(); //apellido materno
            $table->string('dni',15)->nullable(); // dni del alumno
            $table->integer('codigomat')->nullable(); //codigo de matriculo
            $table->timestamp('fechareg')->nullable(); //
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
