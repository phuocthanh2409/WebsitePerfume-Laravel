<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Donhang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhang', function (Blueprint $table) {
            $table->increments('dhMa');
            $table->string('paymentHinhThuc');
            $table->integer('paymentTinhTrang');
            $table->integer('paymentTinhTrang');
            $table->integer('paymentTinhTrang');
            $table->integer('paymentTinhTrang');
            $table->integer('paymentTinhTrang');
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
        Schema::dropIfExists('donhang');
    }
}
