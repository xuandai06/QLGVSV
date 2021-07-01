<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeTaiGiaoTrinhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('de_tai_giao_trinhs', function (Blueprint $table) {
            $table->string('MaKhoaHoc')->primary();
            $table->string('TenKhoaHoc');
            $table->string('ThoiGian');
            $table->string('KetQua');
            $table->string('GhiChu');
            $table->string('MaLoai');
            $table->string('MaCap');

            $table->foreign('MaLoai')->references('MaLoai')->on('loai_khoa_hocs')
            ->onUpdate('cascade')
            ->onUpdate('cascade');
            $table->foreign('MaCap')->references('MaCap')->on('cap_thuc_hiens')
            ->onUpdate('cascade')
            ->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('de_tai_giao_trinhs');
    }
}
