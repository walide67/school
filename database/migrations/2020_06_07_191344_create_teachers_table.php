<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('identify')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('school_id')->unsigned();
            $table->integer('matter_id')->unsigned();
            $table->string('photo');
            $table->float('rate');
            $table->integer('votes_number');
            $table->string('notification_token');
            $table->rememberToken();
            $table->foreign('school_id')->references('id')->on('subadmins')
            ->onDelete('cascade');
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
        Schema::dropIfExists('teachers');
    }
}
