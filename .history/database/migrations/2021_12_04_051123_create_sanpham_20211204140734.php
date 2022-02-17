<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanpham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('sanpham');
        Schema::create('sanpham', function (Blueprint $table) {
            $table->increments('spMa');
            $table->integer('loaiMa')->unsigned();
            $table->integer('thMa')->unsigned();
            $table->integer('muaMa')->unsigned();
            $table->integer('kmMa')->nullable()->unsigned();
            $table->string('spTen');
            $table->string('spGia');
            $table->string('spGiaKhuyenMai')->nullable();
            $table->string('spDungTich');
            $table->text('spMoTa');
            $table->string('spHinhThuc')->nullable();
            $table->integer('spTrangThai');
            $table->timestamps();
        });

        /* Schema::table('sanpham', function (Blueprint $table) {

            $table->foreign('loaiMa')->references('loaiMa')->on('loaisanpham');
        });

        Schema::table('sanpham', function (Blueprint $table) {

            $table->foreign('thMa')->references('thMa')->on('thuonghieu');
        });

        Schema::table('sanpham', function (Blueprint $table) {

            $table->foreign('muaMa')->references('muaMa')->on('muasanpham');
        }); */

        $table->dropForeign('loaisanpham');
        $table->dropForeign('thuonghieu');
        $table->dropForeign('muasanpham');
        $table->dropForeign('kmMa');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sanpham');
    }
}
