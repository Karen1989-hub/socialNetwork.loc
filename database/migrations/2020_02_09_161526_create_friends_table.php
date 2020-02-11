<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFriendsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friends', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('friend1_firstName');
            $table->string('friend1_lastName');
            $table->string('friend1_imageName')->nullable();
            $table->string('friend1');
            $table->string('friend2_firstName');
            $table->string('friend2_lastName');
            $table->string('friend2_imageName')->nullable();
            $table->string('friend2');
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
        Schema::dropIfExists('friends');
    }
}
