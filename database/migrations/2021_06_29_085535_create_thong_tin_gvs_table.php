<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThongTinGvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thong_tin_gvs', function (Blueprint $table) {
            $table->string('MaGV')->primary();
            $table->string('HoTenGV');
            $table->string('GioiTinh')->nullable();
            $table->string('QueQuan');
            $table->string('DiaChi');
            $table->string('SDT');
            $table->string('email')->unique();

            $table->string('MaTD');
            $table->string('MaCV');
            $table->string('MaNganh');
            
            $table->foreign('MaTD')->references('MaTD')->on('trinh_dos')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('MaCV')->references('MaCV')->on('chuc_vus')
            ->onUpdate('cascade')
            ->onDelete('cascade');
            $table->foreign('MaNganh')->references('MaNganh')->on('nganhs')
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
        Schema::dropIfExists('thong_tin_gvs');
    }
}
