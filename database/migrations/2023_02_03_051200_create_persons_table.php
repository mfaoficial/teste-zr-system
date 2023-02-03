<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('type');
            $table->string('cpf');
            $table->string('cnpj');
            $table->string('rg');
            $table->string('birth-date');
            $table->string('person-type');
            $table->string('zip-code');
            $table->string('street');
            $table->string('number');
            $table->string('district');
            $table->string('complement');
            $table->string('city');
            $table->string('state');
            $table->string('phone');
            $table->string('cell-phone');
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
        Schema::dropIfExists('persons');
    }
}
