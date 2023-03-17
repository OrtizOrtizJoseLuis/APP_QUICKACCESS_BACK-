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
        Schema::create('catLicencias', function (Blueprint $table) {
            $table->id();
            $table->dateTime('fechaPago')->comment('Fecha de Pago');
            $table->dateTime('vigencia')->comment('Fecha de vigencia');
            //$table->enum('penalizacion', ['Activo', 'Inactivo'])->comment('Penalización');
            $table->boolean('penalizacion')->comment('Penalización');

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
        Schema::dropIfExists('cat_licencias');
    }
};
