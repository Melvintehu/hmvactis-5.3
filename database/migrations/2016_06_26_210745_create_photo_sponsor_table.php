<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotoSponsorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_sponsor', function (Blueprint $table) {
            $table->integer('sponsor_id')->unsigned();
            $table->integer('photo_id')->unsigned();
            $table->primary(['sponsor_id' , 'photo_id' ]);
            $table->string('type');

            $table->timestamps();

            $table->foreign('photo_id')
                  ->references('id')
                  ->on('photos')
                  ->onDelete('cascade');

            $table->foreign('sponsor_id')
                  ->references('id')
                  ->on('sponsors')
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
        Schema::drop('photo_sponsor');
    }
}
