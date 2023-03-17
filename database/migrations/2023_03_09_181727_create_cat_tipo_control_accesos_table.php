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
        Schema::create('catTipoControlAccesos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->comment('Nombre del Tipo de Control de Acceso');
            $table->enum('estatus', ['Activo', 'Inactivo'])->comment('Estatus');
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
        Schema::dropIfExists('cat_tipo_control_accesos');
    }
};
