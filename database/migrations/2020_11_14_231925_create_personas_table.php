<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->string('apellido', 50);
            $table->string('cedula', 15);
            $table->string('celular', 15);
            $table->string('correo', 50);
            
            $table->bigInteger('departamento_id')->unsigned();
            $table->foreign('departamento_id')->references('id')->on('departamentos')->onDelete('cascade');

            $table->bigInteger('ciudad_id')->unsigned();
            $table->foreign('ciudad_id')->references('id')->on('ciudades')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
