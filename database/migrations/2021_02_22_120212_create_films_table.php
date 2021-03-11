<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('name', 500);
            $table->string('code', 520)->index()->unique();
            $table->string('nation', 100);
            $table->json('thumbnails')->comment('avatar');
            $table->integer('category_id')->comment('thể loại phim');
            $table->string('quality')->nullable()->comment('chất lượng');
            $table->string('time')->comment('thoi luong phim');
            $table->string('link')->comment('Link film');
            $table->text('trailer')->nullable()->comment('link trailer');
            $table->string('resolution')->nullable()->comment('độ phân giải');
            $table->longText('content')->nullable();
            $table->json('actors')->comment('diễn viên')->nullable();
            $table->string('total_episode')->nullable()->comment('số tập');
            $table->string('language')->comment('ngôn ngữ')->nullable();
            $table->bigInteger('counter_view')->default(0);
            $table->string('status')->default('open');
            $table->integer('film_timestamp_created')->default(0)->comment('ngày sản xuất');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('films');
    }
}
