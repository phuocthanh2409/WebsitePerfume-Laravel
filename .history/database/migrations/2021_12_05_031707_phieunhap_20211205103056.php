<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Phieunhap extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('phieunhap', function (Blueprint $table) {
            $table->increments('pnMa');
            $table->integer('nccMa')->unsigned();
            $table->text('pnMoTa');
            $table->string('pnTongTien');
            $table->string('pnNgayNhap');
            $table->timestamps();
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
        Schema::dropIfExists('phieunhap');
    }
}
