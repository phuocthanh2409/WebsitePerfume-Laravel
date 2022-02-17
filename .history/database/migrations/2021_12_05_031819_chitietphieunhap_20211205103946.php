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
            $table->integer('ctpnSoLuong');
            $table->timestamps();
        });

        Schema::table('chitietphieunhap', function (Blueprint $table) {

            $table->foreign('nccMa')->references('nccMa')->on('nhacungcap');
        });

        Schema::table('phieunhap', function (Blueprint $table) {

            $table->foreign('nccMa')->references('nccMa')->on('nhacungcap');
        });

        Schema::table('phieunhap', function (Blueprint $table) {

            $table->foreign('nccMa')->references('nccMa')->on('nhacungcap');
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
