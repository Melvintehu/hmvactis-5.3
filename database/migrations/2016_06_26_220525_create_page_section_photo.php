<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePageSectionPhoto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_section_photo', function (Blueprint $table) {
            $table->integer('page_section_id')->unsigned();
            $table->integer('photo_id')->unsigned();
            $table->primary(['page_section_id' , 'photo_id' ]);
            $table->string('type');

            $table->timestamps();

            $table->foreign('photo_id')
                  ->references('id')
                  ->on('photos')
                  ->onDelete('cascade');

            $table->foreign('page_section_id')
                  ->references('id')
                  ->on('page_sections')
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
        Schema::drop('page_section_photo');
    }
}
