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
        Schema::create('transInmuebles', function (Blueprint $table) {
            $table->id();
            $table->string('numeroContrato')->comment('Numero de Contrato');
            $table->string('calleAvenida')->comment('Calle o Avenida');
            $table->string('numeroExterior')->comment('Numero Exterior');
            $table->string('numeroInterior')->comment('Numero Interior');
            $table->string('codigoPostal')->comment('Codigo Postal');
            $table->string('pais')->comment('Pais');
            $table->string('nombreInmueble')->comment('Nombre del Inmueble');
            $table->string('observaciones')->comment('Observaciones');

            //llave foranea de la tabla Usuarios
            $table->unsignedBigInteger('idCatUsuarios')->comment('Id Usuario');
            $table->foreign('idCatUsuarios')->references('id')->on('catUsuarios');

            //llave foranea de la tabla Colonias
            $table->unsignedBigInteger('idCatColonias')->comment('Id Colonia');
            $table->foreign('idCatColonias')->references('id')->on('catColonias');

            //llave foranea de la tabla Municipios
            $table->unsignedBigInteger('idCatMunicipios')->comment('Id Municipio');
            $table->foreign('idCatMunicipios')->references('id')->on('catMunicipios');

            //llave foranea de la tabla Estados
            $table->unsignedBigInteger('idCatEstados')->comment('Id Estado');
            $table->foreign('idCatEstados')->references('id')->on('catEstados');

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
        Schema::dropIfExists('transInmuebles');
    }
};
