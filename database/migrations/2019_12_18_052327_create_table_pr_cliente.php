<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePrCliente extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PR_CLIENTE', function (Blueprint $table) {
            $table->bigIncrements('CONS_CLIENTE');
	    $table->string('NOMBRE');
            $table->integer('CONS_TIPOCLIENTE');
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
        Schema::dropIfExists('PR_CLIENTE');
    }
}
