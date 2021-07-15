<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentInDormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_in_dorms', function (Blueprint $table) {
            $table->string('student_id',15);
            $table->date('start_time');
            $table->date('end_time')->nullable();
            $table->string('room',20);
            $table->string('note');

            $table->foreign('student_id')->references('id')->on('students')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->primary(['student_id', 'start_time']);
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
        Schema::dropIfExists('student_in_dorms');
    }
}
