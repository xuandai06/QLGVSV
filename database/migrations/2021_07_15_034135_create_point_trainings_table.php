<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePointTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('point_trainings', function (Blueprint $table) {
            $table->string('student_id',15);
            $table->integer('term');
            $table->integer('point');

            $table->foreign('student_id')->references('id')->on('students')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->primary(['student_id', 'term']);
            
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
        Schema::dropIfExists('point_trainings');
    }
}
