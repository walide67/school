<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClasseMattersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('classe_matter', function (Blueprint $table) {
            $table->integer('classe_id')->unsigned();
            $table->integer('matter_id')->unsigned();
            $table->foreign('classe_id')->references('id')->on('classes')
                    ->onDalete('cascade');
            $table->foreign('matter_id')->references('id')->on('matters')
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
        Schema::dropIfExists('classe_matters');
    }
}
