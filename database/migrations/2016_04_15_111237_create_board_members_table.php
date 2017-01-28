<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('board_members', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('board_id')->unsigned();
            $table->string('name');
            $table->longText('description');
            $table->string('role');
            $table->string('email');
            $table->string('study');
            $table->timestamps();

            $table->foreign('board_id')
                  ->references('id')
                  ->on('boards')
                  ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('board_members');
    }
}
