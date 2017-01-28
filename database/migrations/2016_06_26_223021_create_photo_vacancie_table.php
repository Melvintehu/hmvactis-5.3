<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotoVacancieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_vacancie', function (Blueprint $table) {
            $table->integer('photo_id')->unsigned();
            $table->integer('vacancie_id')->unsigned();
            $table->primary(['vacancie_id' , 'photo_id' ]);
            $table->string('type');

            $table->timestamps();

            $table->foreign('photo_id')
                  ->references('id')
                  ->on('photos')
                  ->onDelete('cascade');

            $table->foreign('vacancie_id')
                  ->references('id')
                  ->on('vacancies')
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
        Schema::drop('photo_vacancie');
    }
}
