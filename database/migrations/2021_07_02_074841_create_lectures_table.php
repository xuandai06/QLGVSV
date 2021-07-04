<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lectures', function (Blueprint $table) {
            $table->string('id',15);
            $table->string('name',100);
            $table->string('sex',10);
            $table->date('birthday')->nullable();
            $table->string('hometown')->nullable();
            $table->string('address')->nullable();
            $table->string('phone_number',13)->nullable();
            $table->string('note')->nullable();
            $table->string('position_id',15);
            $table->string('level_id',15);
            $table->string('major_id',15);

            $table->foreign('id')->references('id')->on('users')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('position_id')->references('id')->on('positions')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('level_id')->references('id')->on('levels')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('major_id')->references('id')->on('majors')
            ->onUpdate('cascade')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lectures');
    }
}
