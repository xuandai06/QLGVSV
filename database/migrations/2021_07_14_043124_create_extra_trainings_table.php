<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExtraTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('extra_trainings', function (Blueprint $table) {
            $table->string('id',15);
            $table->string('lecturer_id',15);
            $table->string('name',100);
            $table->string('specialization')->nullable();
            $table->string('place')->nullable();
            $table->date('start_time')->nullable();
            $table->date('end_time')->nullable();
            $table->string('result',50)->nullable();
            $table->string('note')->nullable();
            
            $table->foreign('lecturer_id')->references('id')->on('lecturers')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->primary(['lecturer_id','id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('extra_trainings');
    }
}
