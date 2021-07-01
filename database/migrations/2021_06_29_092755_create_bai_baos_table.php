<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBaiBaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bai_baos', function (Blueprint $table) {
            $table->string('MaBai')->primary();
            $table->string('TenBai');
            $table->string('ChiTiet');
            $table->date('ThoiGian');

            $table->string('MaTapChi');
            $table->foreign('MaTapChi')->references('MaTapChi')->on('danh_muc_tap_chis')
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
        Schema::dropIfExists('bai_baos');
    }
}
