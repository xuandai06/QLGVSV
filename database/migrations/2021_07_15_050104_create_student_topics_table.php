<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTopicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_topics', function (Blueprint $table) {
            $table->string('id',15)->primary();
            $table->string('name');
            $table->string('result',100)->nullable();
            $table->string('prize',100)->nullable();
            $table->string('instructor',100)->nullable();
            $table->date('start_time')->nullable();
            $table->date('end_time')->nullable();
            $table->string('note')->nullable();
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
        Schema::dropIfExists('student_topics');
    }
}
