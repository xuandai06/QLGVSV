<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointsProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points_processes', function (Blueprint $table) {
            $table->string('student_id',15);
            $table->string('course_id',15);
            $table->float('component_point')->nullable();
            $table->float('course_point')->nullable();
            $table->string('note')->nullable();

            $table->foreign('student_id')->references('id')->on('students')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('course_id')->references('id')->on('courses')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->primary(['student_id', 'course_id']);

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
        Schema::dropIfExists('points_processes');
    }
}
