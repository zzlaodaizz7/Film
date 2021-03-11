<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryFilmTable extends Migration
{
    public function up()
    {
        Schema::create('category_film', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->bigInteger('film_id');
            $table->bigInteger('category_id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('category_film');
    }
}
