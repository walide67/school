<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeacherClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_classe', function (Blueprint $table) {
            $table->integer('teacher_id')->unsigned();
            $table->integer('classe_id')->unsigned();
            $table->foreign('teacher_id')->references('id')->on('teachers')
            ->onDelete('cascade');
            $table->foreign('classe_id')->references('id')->on('classes')
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
        Schema::dropIfExists('teacher_classes');
    }
}
