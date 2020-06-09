<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnoncesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('annonce_title');
            $table->text('annonce_content');
            $table->string('annonce_photo');
            $table->enum('annonce_type', array('teacher', 'subadmin'));
            $table->integer('subadmin_id')->nullable()->unsigned();
            $table->integer('teacher_id')->nullable()->unsigned();
            $table->foreign('subadmin_id')->references('id')->on('subadmins')
            ->onDelete('cascade');
            $table->foreign('teacher_id')->references('id')->on('teachers')
            ->onDelete('cascade');
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
        Schema::dropIfExists('annonces');
    }
}
