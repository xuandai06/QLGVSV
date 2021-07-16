<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRewardsDisciplinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rewards_disciplines', function (Blueprint $table) {
            $table->string('id',15)->primary();
            $table->string('student_id',15);
            $table->string('reward',50)->nullable();
            $table->string('discipline',50)->nullable();
            $table->string('note')->nullable();

            $table->foreign('student_id')->references('id')->on('students')
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
        Schema::dropIfExists('rewards_disciplines');
    }
}
