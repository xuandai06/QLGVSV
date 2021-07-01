<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoMonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bo_mons', function (Blueprint $table) {
            $table->string('MaBM')->primary();
            $table->string('TenBM');
            $table->string('MaDonVi');
            $table->foreign('MaDonVi')->references('MaDonVi')->on('don_vis')
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
        Schema::dropIfExists('bo_mons');
    }
}
