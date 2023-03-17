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
        Schema::create('catPermisos', function (Blueprint $table) { 
            $table->id();
            $table->boolean('crear')->comment('Crear');
            $table->boolean('editar')->comment('Editar');
            $table->boolean('eliminar')->comment('Eliminar');
            $table->boolean('consultar')->comment('Consultar');

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
        Schema::dropIfExists('cat_permisos');
    }
};
