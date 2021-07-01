<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietDeTaiGiaoTrinhsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chi_tiet_de_tai_giao_trinhs', function (Blueprint $table) {
            $table->string('MaKhoaHoc');
            $table->string('MaGV');
            $table->string('VaiTroThamGia');
            
            $table->foreign('MaKhoaHoc')->references('MaKhoaHoc')->on('de_tai_giao_trinhs')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->foreign('MaGV')->references('MaGV')->on('thong_tin_gvs)')
            ->onUpdate('cascade')
            ->onDelete('cascade');

            $table->primary(['MaKhoaHoc','MaGV']);

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_de_tai_giao_trinhs');
    }
}
