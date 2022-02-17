<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhuyenmai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khuyenmai', function (Blueprint $table) {
            $table->increments('kmMa');
            $table->string('kmTen');
            $table->text('kmMoTa');
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
        Schema::dropIfExists('khuyenmai');
    }
}
