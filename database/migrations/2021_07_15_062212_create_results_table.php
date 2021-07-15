<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            $table->string('work_id',15);
        
            $table->foreign('work_id')->references('id')->on('works')
            ->onDelete('cascade')
            ->onUpdate('cascade');

            $table->string('status',100);
            $table->string('note')->nullable();
           
            $table->primary('work_id');
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
        Schema::dropIfExists('results');
    }
}
