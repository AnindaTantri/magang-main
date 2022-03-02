<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailDalamKotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_dalam_kotas', function (Blueprint $table) {
            $table->id();
            $table->string('kategori_acara');
            $table->text('nama');
            $table->date('tanggal');
            $table->string('jml_dinas');
            $table->string('jml_yangdinas');
            $table->integer('nilai');
            $table->string('admin');
            $table->string('titik_acara');
            $table->string('kesulitan');
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
        Schema::dropIfExists('detail_dalam_kotas');
    }
}
