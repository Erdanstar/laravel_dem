<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestNextsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_nexts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('orentation_id');
            $table->integer('first')->nullable();
            $table->integer('second')->nullable();
            $table->integer('third')->nullable();
            $table->integer('four')->nullable();
            $table->integer('five')->nullable();
            $table->integer('six')->nullable();
            $table->integer('seven')->nullable();
            $table->integer('eight')->nullable();
            $table->integer('nine')->nullable();
            $table->integer('ten')->nullable();
            $table->integer('eleven')->nullable();
            $table->integer('twelve')->nullable();
            $table->integer('thirteen')->nullable();
            $table->integer('fourteen')->nullable();
            $table->integer('fifteen')->nullable();
            $table->integer('sixteen')->nullable();
            $table->integer('seventeen')->nullable();
            $table->integer('eighteen')->nullable();
            $table->integer('nineteen')->nullable();
            $table->integer('twenty')->nullable();
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
        Schema::dropIfExists('test_nexts');
    }
}
