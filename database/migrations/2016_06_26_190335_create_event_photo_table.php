<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventPhotoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('event_photo', function (Blueprint $table) {
            $table->integer('event_id')->unsigned();
            $table->integer('photo_id')->unsigned();
            $table->primary(['event_id' , 'photo_id' ]);
            $table->string('type');

            $table->timestamps();

            $table->foreign('photo_id')
                  ->references('id')
                  ->on('photos')
                  ->onDelete('cascade');

            $table->foreign('event_id')
                  ->references('id')
                  ->on('events')
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
        Schema::drop('event_photo');
    }
}
