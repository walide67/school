<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasseCoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classe_cour', function (Blueprint $table) {
            $table->integer('classe_id')->unsigned();
            $table->integer('cour_id')->unsigned();
            $table->foreign('classe_id')->references('id')->on('classes')
                ->onDelete('cascade');
            $table->foreign('cour_id')->references('id')->on('cours')
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
        Schema::dropIfExists('classe_cours');
    }
}
