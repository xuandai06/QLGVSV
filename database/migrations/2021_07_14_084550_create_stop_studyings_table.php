<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStopStudyingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stop_studyings', function (Blueprint $table) {
            $table->string('student_id',15);
            $table->date('time');
            $table->string('cause')->nullable();
            $table->string('note')->nullable();
            $table->foreign('student_id')->references('id')->on('students')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->primary('student_id');
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
        Schema::dropIfExists('stop_studyings');
    }
}
