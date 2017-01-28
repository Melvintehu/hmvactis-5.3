<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommitteeMemberPhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('committee_member_photo', function (Blueprint $table) {
            
            $table->integer('photo_id')->unsigned();
            $table->integer('committee_member_id')->unsigned();
            $table->primary(['committee_member_id' , 'photo_id' ]);
            $table->string('type');

            $table->timestamps();

            $table->foreign('photo_id')
                  ->references('id')
                  ->on('photos')
                  ->onDelete('cascade');

            $table->foreign('committee_member_id')
                  ->references('id')
                  ->on('committee_members')
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
        Schema::drop('committee_member_photo');
    }
}
