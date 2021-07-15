<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentNotInDormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_not_in_dorms', function (Blueprint $table) {
            $table->string('student_id',15);
            $table->date('start_time');
            $table->date('end_time')->nullable();
            $table->string('place');
            $table->string('host',100)->nullable();
            $table->string('host_phone_number',13)->nullable();
            $table->string('note')->nullable();

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
        Schema::dropIfExists('student_not_in_dorms');
    }
}
