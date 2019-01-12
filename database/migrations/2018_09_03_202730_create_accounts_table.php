<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->double('value');
            $table->boolean('type');
	        $table->boolean('parcelado');
	        $table->boolean('entrada');
	        $table->integer('parcelas')->nullable();
	        $table->integer('client_id')->unsigned()->nullable();
	        $table->foreign('client_id')->references('id')->on('clients')->onDelete('cascade')->onUpdate('cascade');
	        $table->integer('provider_id')->unsigned()->nullable();
	        $table->foreign('provider_id')->references('id')->on('providers')->onDelete('cascade')->onUpdate('cascade');
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
        Schema::dropIfExists('accounts');
    }
}
