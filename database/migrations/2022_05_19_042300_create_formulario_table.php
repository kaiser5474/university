<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormularioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formulario', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estudiante_id');
            $table->string('resumenActividades')->nullable();
            $table->string('actividadesRealizadas')->nullable();
            $table->string('aprendizajePerfil')->nullable();
            $table->string('mallaCurricular')->nullable();
            $table->foreign('estudiante_id')
                ->references('id')
                ->on('estudiantes')
                ->onDelete('cascade');
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
        Schema::dropIfExists('formulario');
    }
}
