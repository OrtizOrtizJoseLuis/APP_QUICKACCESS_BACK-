<?php

use Illuminate\Database\Eloquent\SoftDeletingScope;
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
        Schema::create('catUsuarios', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50)->comment('Nombre');
            $table->string('apellidoPaterno', 50)->comment('Apellido Paterno');
            $table->string('apellidoMaterno', 50)->comment('Apellido Materno');
            $table->integer('edad', 50)->comment('Edad');
            $table->string('usuario', 50)->comment('Usuario');
            $table->string('correo', 50)->comment('Correo');
            $table->string('contrasena', 50)->comment('Contraseña');
            $table->integer('telefono', 10)->comment('Telefono');
            $table->boolean('activo')->comment('Activo');
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
        Schema::dropIfExists('cat_usuarios');
    }
};
