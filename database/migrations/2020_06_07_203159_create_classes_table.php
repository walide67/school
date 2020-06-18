<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('class_level');
            $table->integer('field_id')->unsigned();
            $table->integer('school_id')->unsigned();
            $table->integer('class_number');
            $table->foreign('field_id')->references('id')->on('fields')
                    ->onDelete('cascade');
            $table->foreign('school_id')->references('id')->on('subadmins')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('classes');
    }
}
