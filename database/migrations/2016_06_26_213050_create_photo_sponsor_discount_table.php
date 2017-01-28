<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhotoSponsorDiscountTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photo_sponsor_discount', function (Blueprint $table) {
            $table->integer('sponsor_discount_id')->unsigned();
            $table->integer('photo_id')->unsigned();
            $table->primary(['sponsor_discount_id' , 'photo_id' ]);
            $table->string('type');

            $table->timestamps();

            $table->foreign('photo_id')
                  ->references('id')
                  ->on('photos')
                  ->onDelete('cascade');

            $table->foreign('sponsor_discount_id')
                  ->references('id')
                  ->on('sponsor_discounts')
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
        Schema::drop('photo_sponsor_discount');
    }
}
