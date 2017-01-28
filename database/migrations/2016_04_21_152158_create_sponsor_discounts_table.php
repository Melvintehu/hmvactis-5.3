<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSponsorDiscountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sponsor_discounts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sponsor_id')->unsigned();
            $table->string('title');
            $table->longText('description');
            $table->timestamps();

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
        Schema::drop('sponsor_discounts');
    }
}
