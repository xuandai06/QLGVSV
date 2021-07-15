<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_registers', function (Blueprint $table) {
            $table->string('course_class_id',15);
            $table->string('student_id',15);

            $table->foreign('course_class_id')->references('id')->on('course_classes')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->foreign('student_id')->references('id')->on('students')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->primary(['course_class_id', 'student_id']);

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
        Schema::dropIfExists('course_registers');
    }
}
