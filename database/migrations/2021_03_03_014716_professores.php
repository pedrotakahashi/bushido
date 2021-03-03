<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Professores extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table ->string('nome')->unique();
            $table->date('data-nascimento');
            $table->string('cpf',11)->unique();
            $table->string('rua')->nullable();
            $table->string('cep')->nullable();
            $table->string('num-casa')->nullable();
            $table->string('telefone')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        //
    }
}
