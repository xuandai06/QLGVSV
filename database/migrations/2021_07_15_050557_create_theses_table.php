<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThesesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theses', function (Blueprint $table) {
            $table->string('student_id',15);
            $table->string('name');
            $table->date('start_time')->nullable();
            $table->date('end_time')->nullable();

            $table->foreign('student_id')->references('id')->on('students')
            ->onUpdate('cascade')
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
        Schema::dropIfExists('theses');
    }
}
