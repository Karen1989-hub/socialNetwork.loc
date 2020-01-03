<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSaveWorkExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('save_work_experiences', function (Blueprint $table) {            
            $table->bigIncrements('id');
            $table->string('userId');
            $table->string('company');
            $table->string('designation');
            $table->string('workFrom');
            $table->string('workTo');             
            $table->string('companyCity/Town');
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
        Schema::dropIfExists('save_work_experiences');
    }
}
