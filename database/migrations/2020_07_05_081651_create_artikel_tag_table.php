<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtikelTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikel_tag', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('artikel_id')->unsigned();
            $table->bigInteger('tag_id')->unsigned();
            $table->foreign('artikel_id')->references('id')->on('artikels')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('artikel_tag');
    }
}
