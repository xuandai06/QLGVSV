<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_assignments', function (Blueprint $table) {
            $table->string('work_id',15);
            $table->string('unit_id',15);
            $table->string('role')->nullable();
            $table->string('note')->nullable();

            $table->foreign('work_id')->references('id')->on('works')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->foreign('unit_id')->references('id')->on('units')
            ->onDelete('cascade')
            ->onUpdate('cascade');
            $table->primary(['work_id', 'unit_id']);
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
        Schema::dropIfExists('work_assignments');
    }
}
