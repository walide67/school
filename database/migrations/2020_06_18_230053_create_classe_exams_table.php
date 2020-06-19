<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasseExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classe_exam', function (Blueprint $table) {
            $table->integer('classe_id')->unsigned();
            $table->integer('exam_id')->unsigned();
            $table->foreign('classe_id')->references('id')->on('classes')
                ->onDelete('cascade');
            $table->foreign('exam_id')->references('id')->on('exams')
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
        Schema::dropIfExists('classe_exams');
    }
}
