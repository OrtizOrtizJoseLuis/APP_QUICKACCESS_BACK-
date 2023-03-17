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
        Schema::create('catInvitados', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50)->comment('Nombre');
            $table->string('apellidoPaterno', 50)->comment('Apellido Paterno');
            $table->string('apellidoMaterno', 50)->comment('Apellido Materno');
            $table->string('placa', 50)->comment('Placa');
            $table->string('personasExtra', 50)->comment('Personas Extra');
            $table->string('informacionAdicional', 50)->comment('Informacion Adicional');
            $table->string('codigoAcceso', 50)->comment('Codigo de Acceso');

            //llave foranea de la tabla Eventos
            $table->unsignedBigInteger('idTransEventos')->comment('Id Evento');
            $table->foreign('idTransEventos')->references('id')->on('transEventos');

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
        Schema::dropIfExists('cat_invitados');
    }
};
