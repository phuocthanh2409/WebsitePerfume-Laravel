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
            $table->integer('loaiMa', 10);
            $table->integer('thMa', 10);
            $table->integer('muaMa', 10);
            $table->integer('kmMa', 10)->nullable();
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
            $table->unsignedBigInteger('user_id');

            $table->foreign('user_id')->references('id')->on('users');
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
