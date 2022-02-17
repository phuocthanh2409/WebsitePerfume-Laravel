<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Chitietphieunhap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chitietphieunhap', function (Blueprint $table) {
            $table->increments('cnpnMa');
            $table->integer('nccMa')->unsigned();
            $table->integer('pnMa')->unsigned();
            $table->integer('spMa')->unsigned();
            $table->string('ctpnDonGia');
            $table->string('pnTongTien');
            $table->string('pnNgayNhap');
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
        Schema::dropIfExists('chitietphieunhap');
    }
}
