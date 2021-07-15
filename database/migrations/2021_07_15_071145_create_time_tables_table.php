<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use function PHPUnit\Framework\once;

class CreateTimeTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_tables', function (Blueprint $table) {
            $table->string('course_id',15);
            $table->string('course_class_id',15);
            $table->string('lecturer_id',15);
            $table->string('room_id',15);
            $table->date('date');
            $table->integer('start_lesson');

            $table->foreign('course_id')->references('id')->on('courses')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('course_class_id')->references('id')->on('course_classes')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('lecturer_id')->references('id')->on('lecturers')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('room_id')->references('id')->on('rooms')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->primary(['course_id', 'course_class_id', 'lecturer_id', 'room_id', 'date', 'start_lesson']);
            

            $table->integer('number_of_lesson')->nullable();
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
        Schema::dropIfExists('time_tables');
    }
}
