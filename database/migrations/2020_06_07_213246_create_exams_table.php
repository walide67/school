<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->increments('id');
            $table->string('exam_name');
            $table->text('exam_desc');
            $table->integer('teacher_id')->unsigned();
            $table->string('exam_photo');
            $table->string('file_path');
            $table->string('correction_path')->nullable();
            $table->integer('download_number')->default(0);
            $table->float('rate')->default(0);
            $table->integer('votes_number')->default(0);
            $table->timestamps();
            $table->foreign('teacher_id')->references('id')->on('teachers')
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
        Schema::dropIfExists('exams');
    }
}
