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
        Schema::create('catMenuHijos', function (Blueprint $table) { 
            $table->id();
            $table->string('nombre')->comment('Nombre');
            $table->string('icono')->comment('Icono');
            $table->enum('estatus', ['Activo', 'Inactivo'])->comment('Estatus');

            //llave foranea de la tabla MenuPadres
            $table->unsignedBigInteger('idCatMenuPadre')->comment('Id Menu Padre');
            $table->foreign('idCatMenuPadre')->references('id')->on('catMenuPadres');

            //llave foranea de la tabla Perfiles
            $table->unsignedBigInteger('idCatPerfil')->comment('Id Perfil');
            $table->foreign('idCatPerfil')->references('id')->on('catPerfiles');

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
        Schema::dropIfExists('cat_menu_hijos');
    }
};
