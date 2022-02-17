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

        Schema::enableForeignKeyConstraints();

        Schema::table('posts', function ($table) {
            $table->integer('user_id')->unsigned();

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
