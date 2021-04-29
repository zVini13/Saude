<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCentrossaudeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('centrossaude', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('horario_funcionamento', 50);
            $table->string('nome', 50);
            $table->string('cnpj', 50);
            $table->unsignedBigInteger('id_endereco');
            $table->foreign('id_endereco')->references('id')->on('enderecos');
            $table->unsignedBigInteger('id_usuario');
            $table->foreign('id_usuario')->references('id')->on('usuarios');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('centrossaude');
    }
}
