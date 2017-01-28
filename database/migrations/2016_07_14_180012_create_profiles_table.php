<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->integer('user_id')->nullable();
            $table->string('name', 255)->nullable();
            $table->string('street', 255)->nullable();
            $table->string('place', 255)->nullable();
            $table->string('house_number')->nullable();
            $table->string('phone_number', 255)->nullable();
            $table->string('email_address', 255)->nullable();
            $table->string('birthdate', 255)->nullable();
            $table->string('current_study', 255)->nullable();
            $table->string('study_year', 255)->nullable();
            $table->integer('student_number')->nullable();
            $table->string('iban', 255)->nullable();
            $table->string('tnv', 255)->nullable();
            $table->tinyInteger('subscribed')->nullable();
            $table->tinyInteger('admin')->nullable();
            $table->tinyInteger('active')->nullable();


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
        Schema::table('profiles', function (Blueprint $table) {
            //
        });
    }
}
