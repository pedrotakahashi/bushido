<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class SenseisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senseis', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table ->string('nome')->unique();
            $table->text('nascimento');
            $table->text('email');
            $table->text('cpf');
            $table->text('rua');
            $table->text('cep');
            $table->text('bairro');
            $table->text('cidade');
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
