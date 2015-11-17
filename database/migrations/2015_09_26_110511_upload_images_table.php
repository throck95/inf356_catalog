<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UploadImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->text('image_location');
            $table->text('category');
            $table->integer('number_points');
            $table->text('point1');
            $table->text('point2');
            $table->text('point3');
            $table->text('point4');
            $table->text('point5');
            $table->text('point6');
            $table->text('point7');
            $table->text('point8');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('images');
    }
}
