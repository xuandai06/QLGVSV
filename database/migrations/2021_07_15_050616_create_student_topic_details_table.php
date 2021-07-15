<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTopicDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_topic_details', function (Blueprint $table) {
            $table->string('student_id',15);
            $table->string('student_topic_id',15);

            $table->string('role',100)->nullable();
            $table->string('note')->nullable();
          
            $table->foreign('student_id')->references('id')->on('students')
            ->onUpdate('cascade')
            ->onUpdate('cascade');
            $table->foreign('student_topic_id')->references('id')->on('student_topics')
            ->onUpdate('cascade')
            ->onUpdate('cascade');
            $table->primary(['student_id','student_topic_id']);
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
        Schema::dropIfExists('student_topic_details');
    }
}
