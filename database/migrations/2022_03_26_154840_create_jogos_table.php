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
        Schema::create('jogos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('key');
            $table->date('data');
            $table->time('horario');
            $table->string('duracao', 5);
            $table->string('tipo_campo', 225);
            $table->float('valor',2);
            $table->boolean('goleiro_de_aluguel');
            $table->float('valor_goleiro_de_aluguel',2)->nullable();
            $table->string('local', 1000);
            $table->string('endereco', 800);
            $table->string('frequencia', 500);
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
        Schema::dropIfExists('jogos');
    }
};
