<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizCorrectOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quiz_correct_options', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('correct');
          $table->integer('quiz_id')->unsigned();
          $table->integer('orentation_id')->unsigned();
          $table->integer('question_id')->unsigned();
          $table->integer('lang_id');
          $table->timestamps();

          $table->foreign('quiz_id')->references('id')->on('quizzes')->onDelete('cascade');
          $table->foreign('question_id')->references('id')->on('quiz_questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quiz_correct_options');
    }
}
