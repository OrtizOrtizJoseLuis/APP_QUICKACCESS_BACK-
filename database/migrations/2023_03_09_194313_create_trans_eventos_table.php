<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transEventos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50)->comment('Nombre');
            $table->string('observaciones', 50)->comment('Observaciones');
            $table->dateTime('fecha/hora/inicio')->comment('Fecha de Inicio');
            $table->dateTime('fecha/hora/fin')->comment('Fecha de Fin');
            $table->enum('estatus', ['Activo', 'Inactivo'])->comment('Estatus');

            //llave foranea de la tabla Tipo de Evento 
            $table->unsignedBigInteger('idCatTipoEvento')->comment('Id Tipo de Evento');
            $table->foreign('idCatTipoEvento')->references('id')->on('catTipoEventos');

            //llave foranea de la tabla Usuarios
            $table->unsignedBigInteger('idCatUsuarios')->comment('Id Usuario');
            $table->foreign('idCatUsuarios')->references('id')->on('catUsuarios');

            $table->softDeletes()->comment('Fecha de eliminación');
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
        Schema::dropIfExists('trans_eventos');
    }
};
