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
        Schema::create('catColonias', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->comment('Nombre de la Colonia');
            $table->string('codigoPostal')->comment('Codigo Postal');

            //llave foranea de la tabla Municipios
            $table->unsignedBigInteger('idCatMunicipios')->comment('Id Municipio');
            $table->foreign('idCatMunicipios')->references('id')->on('catMunicipios');

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
        Schema::dropIfExists('cat_colonias');
    }
};
