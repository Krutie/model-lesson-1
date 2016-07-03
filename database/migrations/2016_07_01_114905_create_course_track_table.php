<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseTrackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_track', function (Blueprint $table) {
            $table->integer('course_id')->unsigned();
            $table->integer('track_id')->unsigned();

            $table->foreign('course_id')
                  ->references('id')
                  ->on('courses')
                  ->onDelete('cascade');

            $table->foreign('track_id')
                  ->references('id')
                  ->on('tracks')
                  ->onDelete('cascade');

            $table->primary(['course_id', 'track_id']);
        });

        Schema::create('track_user', function (Blueprint $table) {
            $table->integer('track_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('track_id')
                  ->references('id')
                  ->on('tracks')
                  ->onDelete('cascade');

            $table->foreign('user_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('cascade');

            $table->primary(['track_id', 'user_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('course_track');
        Schema::drop('track_user');
    }
}
