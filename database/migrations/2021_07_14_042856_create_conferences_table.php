<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConferencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conferences', function (Blueprint $table) {
            $table->string('id',15)->primary();
            $table->string('name');
            $table->date('time')->nullable();
            $table->string('place')->nullable();
            $table->string('note')->nullable();

            $table->string('implementation_level_id',15);
            $table->foreign('implementation_level_id')->references('id')->on('implementation_levels')
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
        Schema::dropIfExists('conferences');
    }
}
