<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{

    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('question');
            $table->string('optiona');
            $table->string('optionb');
            $table->string('optionc');
            $table->string('optiond');
            $table->string('answer');
        });
    }


    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
