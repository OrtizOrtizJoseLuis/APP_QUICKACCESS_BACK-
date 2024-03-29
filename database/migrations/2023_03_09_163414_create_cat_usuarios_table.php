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
            $table->integer('edad')->comment('Edad');
            $table->string('usuario', 50)->comment('Usuario');
            $table->string('correo', 50)->comment('Correo');
            $table->longText('password')->comment('Contraseña');
            $table->integer('telefono')->comment('Telefono');
            $table->enum('estatus', ['Activo', 'Inactivo'])->comment('Estatus');


            //llave foranea de la tabla Perfiles
            $table->unsignedBigInteger('idPerfil')->comment('Id Perfil');
            $table->foreign('idPerfil')->references('id')->on('catPerfiles');

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
        Schema::dropIfExists('catUsuarios');
    }
};
