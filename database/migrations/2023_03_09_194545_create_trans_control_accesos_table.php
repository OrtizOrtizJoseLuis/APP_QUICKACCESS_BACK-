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
        Schema::create('transControlAccesos', function (Blueprint $table) {
            $table->id();
            //fecha y hora de entrada
            $table->dateTime('fechaHora')->comment('Fecha y hora de entrada');
            $table->string('observaciones', 255)->nullable()->comment('Observaciones');

            //llave foranea de la tabla Usuarios
            $table->unsignedBigInteger('idCatUsuarios')->comment('Id Usuario');
            $table->foreign('idCatUsuarios')->references('id')->on('catUsuarios');

            //llave foranea de la tabla Inmuebles
            $table->unsignedBigInteger('idInmuebles')->comment('Id Inmueble');
            $table->foreign('idInmuebles')->references('id')->on('transInmuebles');

            //llave foranea de la tabla Tipo control Acceso
            $table->unsignedBigInteger('idCatTipoControlAccesos')->comment('Id Tipo Control Acceso');
            $table->foreign('idCatTipoControlAccesos')->references('id')->on('catTipoControlAccesos');

            //llave foranea de la tabla Invitados 
            $table->unsignedBigInteger('idCatInvitados')->comment('Id Invitado');
            $table->foreign('idCatInvitados')->references('id')->on('catInvitados');

            //llave foranea de la tabla Tipo de Acceso
            $table->unsignedBigInteger('idCatTipoDeAccesos')->comment('Id Tipo de Acceso');
            $table->foreign('idCatTipoDeAccesos')->references('id')->on('catTipoDeAccesos');


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
        Schema::dropIfExists('trans_control_accesos');
    }
};
