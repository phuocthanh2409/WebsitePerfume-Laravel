<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateLoi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists(table('khuyenmai'));
        $table->increments('kmMa');
        $table->string('kmTen');
        $table->text('kmMoTa');
        $table->string('kmGiaTri');
        $table->string('kmNgayBatDau');
        $table->string('kmNgayKetThuc');
        $table->timestamps();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('update_loi');
    }
}
