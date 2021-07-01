<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietBaiBaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_bai_baos', function (Blueprint $table) {
            $table->string('MaBai');
            $table->string('MaGV');
            $table->string('VaiTroThamGia');

            $table->foreign('MaBai')->references('MaBai')->on('bai_baos')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('MaGV')->references('MaGV')->on('thong_tin_gvs')
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
        Schema::dropIfExists('chi_tiet_bai_baos');
    }
}
