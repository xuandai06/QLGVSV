<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_details', function (Blueprint $table) {
            $table->string('work_id',15);
            $table->string('lecturer_id',15);
            $table->string('role')->nullable();
            $table->string('note')->nullable();

            $table->foreign('work_id')->references('id')->on('works')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('lecturer_id')->references('id')->on('lecturers')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->primary(['work_id', 'lecturer_id']);
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
        Schema::dropIfExists('work_details');
    }
}
