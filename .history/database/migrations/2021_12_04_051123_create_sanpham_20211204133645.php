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
            $table->string('spGiaKhuyenMai')->nullable();
            $table->string('spDungTich');
            $table->text('spMoTa');
            $table->string('spHinhThuc')->nullable();
            $table->integer('spTrangThai');
            $table->timestamps();
        });

        Schema::table('sanpham', function (Blueprint $table) {
            $table->foreignId('loaiMa')->constrained('loaisanpham');
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
