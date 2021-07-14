<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTopicsSyllabusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('topics_syllabuses', function (Blueprint $table) {
            $table->string('id',15)->primary();
            $table->string('name',100);
            $table->date('time')->nullable();
            $table->string('result',50)->nullable();
            $table->string('note',100)->nullable();


            $table->string('kind_of_science_id',15);
            $table->string('implementation_id',15);
            $table->foreign('kind_of_science_id')->references('id')->on('kind_of_sciences')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('implementation_id')->references('id')->on('implementation_levels')
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
        Schema::dropIfExists('topics_syllabuses');
    }
}
