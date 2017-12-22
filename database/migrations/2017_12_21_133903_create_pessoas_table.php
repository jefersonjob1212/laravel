<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id');
	    $table->text('nome');
	    $table->date('data_nascimento');
	    $table->text('cpf');
	    $table->text('endereco');
	    $table->text('complemento')->nullable();
	    $table->text('bairro');
	    $table->text('cidade');
	    $table->text('uf');
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
        Schema::dropIfExists('pessoas');
    }
}
