<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topic_details', function (Blueprint $table) {
            $table->string('topic_syllabus_id',15);
            $table->string('lecturer_id',15);
            $table->string('role',50)->nullable();

            $table->foreign('topic_syllabus_id')->references('id')->on('topics_syllabuses')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('lecturer_id')->references('id')->on('lecturers')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->primary(['topic_syllabus_id', 'lecturer_id']);
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
        Schema::dropIfExists('topic_details');
    }
}
