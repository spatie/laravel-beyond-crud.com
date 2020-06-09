<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideosTable extends Migration
{
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('chapter_id');
            $table->string('vimeo_id')->index();
            $table->string('slug');
            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('sort');
            $table->string('runtime');
            $table->string('thumbnail');
            $table->timestamps();

            $table->foreign('chapter_id')->references('id')->on('chapters')->onDelete('CASCADE');
        });
    }
}
