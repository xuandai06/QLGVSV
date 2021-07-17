<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->string('id',15)->primary();
            $table->string('name',100);
            $table->string('sex',10)->nullable();
            $table->date('birthday')->nullable();
            $table->string('hometown')->nullable();
            $table->string('address')->nullable();
            $table->string('nationality',50)->nullable();
            $table->string('nation',50)->nullable();
            $table->string('national_id',15)->nullable();
            $table->date('issue_date')->nullable();
            $table->date('issue_place')->nullable();
            $table->string('phone_number',13)->nullable();
            $table->string('family_phone_number',13)->nullable();
            $table->string('name_of_father',100)->nullable();
            $table->string('job_of_father',100)->nullable();
            $table->string('name_of_mother',100)->nullable();
            $table->string('job_of_mother',100);
            $table->string('major_id',15);
            $table->string('note')->nullable();

            $table->foreign('id')->references('id')->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->string('student_position_id',15);
            $table->string('class_id',15);

            $table->foreign('student_position_id')->references('id')->on('student_positions')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('class_id')->references('id')->on('classes')
            ->onUpdate('cascade')
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
        Schema::dropIfExists('students');
    }
}
