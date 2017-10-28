<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInstagramsTable extends Migration
{
    public function up()
    {
        Schema::create('instagrams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('access_token');
            $table->string('id_insta');
            $table->string('username');
            $table->string('profile_picture');
            $table->string('full_name');
            $table->string('bio');
            $table->string('website');
            $table->boolean('is_business');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('instagrams');
    }
}
