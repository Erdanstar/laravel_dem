<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('surname');
            $table->string('name');
            $table->string('patronymic')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->date('birthday');
            $table->string('sex');
            $table->string('avatar')->nullable();
            $table->string('edu_type')->nullable();
            $table->string('grade')->nullable();
            $table->string('course')->nullable();
            $table->string('profile_grade')->nullable();
            $table->integer('course_profession')->nullable();
            $table->integer('preselecion_profession')->nullable();
            $table->integer('preselecion_university')->nullable();
            $table->integer('status_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('is_admin')->default(0);
            $table->integer('banned')->default(0);
            $table->integer('profession_id')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
