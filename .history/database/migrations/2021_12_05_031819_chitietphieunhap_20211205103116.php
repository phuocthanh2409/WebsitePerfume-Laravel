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
            $table->increments('pnMa');
            $table->integer('nccMa')->unsigned();
            $table->text('pnMoTa');
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
