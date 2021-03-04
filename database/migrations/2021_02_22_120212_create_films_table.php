<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('name',255);
            $table->integer('nations_id')->comment('thuộc quốc gia');
            $table->string('thumbnail',500)->nullable(false)->comment('avatar');
            $table->integer('categorys_id')->comment('thể loại phim');
            $table->string('year')->default('N/A')->comment('năm sản xuất');
            $table->string('quality')->comment('chất lượng');
            $table->string('time')->comment('thoi luong phim');
            $table->string('link')->nullable(false)->comment('Link film');
            $table->string('trailer')->nullable()->comment('link trailer')->nullable();
            $table->string('resolution')->comment('độ phân giải');
            $table->text('contentfilm')->nullable();
            $table->string('cast')->comment('diễn viên')->nullable();
            $table->string('episodes')->comment('số tập')->nullable();
            $table->string('language')->comment('ngôn ngữ')->nullable();
            $table->string('status')->comment('trạng thâi')->nullable();
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
        Schema::dropIfExists('films');
    }
}
