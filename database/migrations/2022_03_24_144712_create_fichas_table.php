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
        Schema::create('fichas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paciente_id')->constrained()->onDelete('cascade');
            $table->string("ficha_apellido");
            $table->string("ficha_nombre");
            $table->string("ficha_edad");
            $table->string("ficha_direccion");
            $table->boolean("talonagr");
            $table->boolean("hiperhidrosis");
            $table->boolean("micosis");
            $table->boolean("anticuag");
            $table->boolean("afecciones");
            $table->boolean("edema");
            $table->boolean("onicocrip");
            $table->boolean("dbt");
            $table->boolean("hiperquera");
            $table->integer('user_id')->unsigned()->index();
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
        Schema::dropIfExists('fichas');
    }
};
