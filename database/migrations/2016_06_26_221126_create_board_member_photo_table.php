<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardMemberPhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('board_member_photo', function (Blueprint $table) {
            $table->integer('photo_id')->unsigned();
            $table->integer('board_member_id')->unsigned();
            $table->primary(['board_member_id' , 'photo_id' ]);
            $table->string('type');

            $table->timestamps();

            $table->foreign('photo_id')
                  ->references('id')
                  ->on('photos')
                  ->onDelete('cascade');

            $table->foreign('board_member_id')
                  ->references('id')
                  ->on('board_members')
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
        Schema::drop('board_member_photo');
    }
}
