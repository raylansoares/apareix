<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstagramUserTable extends Migration
{
    public function up()
    {
        Schema::create('instagram_user', function (Blueprint $table) {
            $table->integer('instagram_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('instagram_id')
                ->references('id')->on('instagrams')
                ->onDelete('cascade');

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('instagram_user');
    }
}
