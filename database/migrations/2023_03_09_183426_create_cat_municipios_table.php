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
        Schema::create('catMunicipios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->comment('Nombre del Municipio');

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
        Schema::dropIfExists('cat_municipios');
    }
};
