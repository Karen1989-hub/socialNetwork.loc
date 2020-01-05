<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaveMyEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('save_my_education', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('userId');
            $table->string('myUniversity');
            $table->string('educationFrom');
            $table->string('educationTo');
            $table->string('description')->nullable();
            $table->string('graduated')->nullable();
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
        Schema::dropIfExists('save_my_education');
    }
}
