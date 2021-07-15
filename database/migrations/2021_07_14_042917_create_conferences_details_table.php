<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConferencesDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conferences_details', function (Blueprint $table) {
            $table->string('conference_id',15);
            $table->string('lecturer_id',15);
            $table->string('role',50)->nullable();

            $table->foreign('conference_id')->references('id')->on('conferences')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('lecturer_id')->references('id')->on('lecturers')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->primary(['conference_id', 'lecturer_id']);
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
        Schema::dropIfExists('conferences_details');
    }
}
