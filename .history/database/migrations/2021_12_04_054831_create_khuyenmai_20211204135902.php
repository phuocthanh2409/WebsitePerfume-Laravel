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
            $table->string('kmGiaTri');
            $table->timestamp('kmNgayBatDau');
            $table->timestamp('kmNgayKetThuc');
            $table->integer('kmTrangThai');
            $table->timestamps();
        });
        Schema::table('sanpham', function (Blueprint $table) {

            $table->foreign('kmMa')->references('kmMa')->on('khuyenmai');
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
