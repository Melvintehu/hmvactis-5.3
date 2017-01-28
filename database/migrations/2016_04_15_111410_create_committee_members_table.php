<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommitteeMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('committee_members', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('committee_id')->unsigned();
            $table->string('name');
            $table->string('role');
            $table->string('email');
            $table->string('study');

            $table->timestamps();

            $table->foreign('committee_id')
                  ->references('id')
                  ->on('committees')
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
        Schema::drop('committee_members');
    }
}
