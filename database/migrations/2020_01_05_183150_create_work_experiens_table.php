<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkExperiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_experiens', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('userId');
            $table->string('company');
            $table->string('designation')->nullable();
            $table->string('from')->nullable();
            $table->string('to')->nullable();
            $table->string('cityTown')->nullable();
            $table->string('description')->nullable();
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
        Schema::dropIfExists('work_experiens');
    }
}
