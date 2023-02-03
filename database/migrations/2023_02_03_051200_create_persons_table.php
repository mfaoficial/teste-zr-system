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
            $table->string('cpf')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('rg');
            $table->date('birth_date');
            $table->string('person_type');
            $table->string('zip_code');
            $table->string('street');
            $table->string('number');
            $table->string('district');
            $table->string('complement')->nullable();
            $table->string('city');
            $table->string('state');
            $table->string('phone_type');
            $table->string('phone')->nullable();
            $table->string('cell_phone')->nullable();
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
