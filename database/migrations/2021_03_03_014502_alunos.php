<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Alunos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table ->string('nome')->unique();
            $table->string('graduacao');
            $table->date('data-nascimento');
            $table->string('cpf',11)->unique();
            $table->string('rua')->nullable();
            $table->string('cep')->nullable();
            $table->string('num-casa')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado',2)->nullable();
            $table->string('nomeDaMae')->nullable();
            $table->string('nomeDoPai')->nullable();
            $table->string('telefone')->nullable();
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
        //
    }
}
