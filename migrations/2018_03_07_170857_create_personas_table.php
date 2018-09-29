<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        //Tablas de personas
        Schema::create('personas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('nombre');
            $table->string('apellido');
            $table->integer('edad');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        //Borra la tabla si existe (Cuando hacemos rollback)
        Schema::dropIfExists('personas');
    }
}
