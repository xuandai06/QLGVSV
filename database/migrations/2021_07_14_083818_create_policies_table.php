<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePoliciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('policies', function (Blueprint $table) {
            $table->string('student_id',15);
            $table->string('policy_object_id',15);
            
            $table->foreign('student_id')->references('id')->on('students')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('policy_object_id')->references('id')->on('policies_objects')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->primary(['student_id', 'policy_object_id']);
            $table->date('start_time')->nullable();
            $table->date('end_time')->nullable();
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
        Schema::dropIfExists('policies');
    }
}
