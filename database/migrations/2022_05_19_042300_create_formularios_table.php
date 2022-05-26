<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormulariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('formularios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estudiante_id');
            $table->string('estado');
            $table->string('resumen_actividades')->nullable();
            $table->string('actividades_realizadas')->nullable();
            $table->string('aprendizaje_perfil')->nullable();
            $table->string('malla_curricular')->nullable();
            $table->enum('actividades', [
                'Cursos y Seminarios Profesionales', 
                'Participación Estudiantil en Actividades Académicas, de Gestión, de Investigación y de Colaboración en Eventos Académicos **',
                'Represantación Estudiantil',
                'Estudiantes Mentores',
                'Representación de la Institución de competencias deportivas',
                'Actividades solidarias y de cooperación',
                'Experiencia Laboral',
                'Idiomas diferenctes al Inglés y Lengua Materna',
                'Dirección de ramas de organizaciones estudiantiles académicas',
                'Representación de la Institución en competencias académicas',
                'Coro y Grupo de Cámara',
                'Participación en la dirección de asociaciones de estudiantes',
                'Participación en juntas receptoras del voto'
                ])->nullable();
            $table->date('fecha_inicio_actividades')->nullable();
            $table->date('fecha_fin_actividades')->nullable();
            $table->integer('horas_solicitadas')->nullable();
            $table->date('fecha_declaracion')->nullable();
            $table->string('firma_declaracion')->nullable();  
            $table->string('tipo_institucion')->nullable();  
            $table->string('razon_social_institucion')->nullable();  
            $table->string('ruc_institucion')->nullable();  
            $table->string('direccion_institucion')->nullable();  
            $table->string('telefono_institucion')->nullable();  
            $table->string('celular_institucion')->nullable();  
            $table->string('ciudad_pais_institucion')->nullable();  
            $table->string('correo_institucion')->nullable();  
            $table->string('tipo_institucion2')->nullable();  
            $table->string('campo_amplio_institucion')->nullable();  
            $table->string('campo_especifico_institucion')->nullable();  
            $table->string('codigo_proyecto_convenio')->nullable();  
            $table->string('nombre_proyecto_convenio')->nullable();
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
        Schema::dropIfExists('formularios');
    }
}
