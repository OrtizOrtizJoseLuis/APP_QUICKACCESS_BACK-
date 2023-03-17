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
        Schema::create('catTiposInmuebles', function (Blueprint $table) {
            $table->id();
            $table->string('tipo', 70)->comment('Tipo de Inmueble');


            //llave foranea de la tabla Inmuebles
            $table->unsignedBigInteger('idInmuebles')->comment('Id Inmueble');
            $table->foreign('idInmuebles')->references('id')->on('transInmuebles');

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
        Schema::dropIfExists('cat_tipos_inmuebles');
    }
};
