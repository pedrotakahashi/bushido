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
            $table->increments('id');
            $table ->string('nome', 55)->unique();
            $table ->string('sobrenome', 55)->nullable();
            $table ->string('email')->unique();
            $table ->string('senha')->unique();
            $table->string('graduacao')->nullable();;
            $table->date('data-nascimento')->nullable();;
            $table->string('cpf',15)->unique();
            $table->string('rua')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cep')->nullable();
            $table->string('cidade')->nullable();
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
