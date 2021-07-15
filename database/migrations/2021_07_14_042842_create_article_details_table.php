<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticleDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('article_details', function (Blueprint $table) {
            $table->string('article_id',15);
            $table->string('lecturer_id',15);
            $table->string('note',50)->nullable();

            $table->foreign('article_id')->references('id')->on('articles')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('lecturer_id')->references('id')->on('lecturers')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->primary(['article_id', 'lecturer_id']);
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
        Schema::dropIfExists('article_details');
    }
}
