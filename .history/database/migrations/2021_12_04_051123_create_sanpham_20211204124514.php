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
        Schema::create('sanpham', function (Blueprint $table) {
            $table->increments('spMa');
            $table->integer('loaiMa');
            $table->integer('thMa');
            $table->integer('muaMa');
            $table->integer('kmMa');
            $table->string('spTen');
            $table->string('spGia');
            $table->string('spGiaKhuyenMai');
            $table->string('spDungTich');
            $table->text('spMoTa');
            $table->string('spHinhThuc');
            $table->integer('spTrangThai');
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
        Schema::dropIfExists('sanpham');
    }
}
