<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFollowUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('follow_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('follow_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->boolean('status');
            $table->foreign('follow_id')->references('id')->on('follows')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('follow_user');
    }
}
