<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EditPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('Photos', function (Blueprint $table) {
            $table->dropColumn('path');
            $table->dropColumn('thumbnail_path');
            $table->dropColumn('name');

            $table->string('filename')->nullable();
            $table->integer('model_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('Photos', function (Blueprint $table) {
            // $table->string('type')->nullable();
            $table->string('thumbnail_path')->nullable();
            $table->string('name')->nullable();
            $table->string('path')->nullable();


            $table->dropColumn('filename');
            $table->dropColumn('model_id');
            //
        });
    }
}
