<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->longText('description')->nullable();
            $table->string('filePath')->nullable();
            $table->boolean('isMovie');
            $table->dateTime('uploadDate');
            $table->date('releaseDate');
            $table->integer('views');
            $table->string('duration')->nullable();
            $table->integer('season')->nullable();
            $table->integer('episode')->nullable();
            $table->integer('entityId');
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
        Schema::dropIfExists('videos');
    }
}
