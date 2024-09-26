<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembayaranTable extends Migration
{
    public function up()
    {
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->id();  // id as primary key (auto-incrementing)
            $table->string('metode_pembayaran', 15);
            $table->integer('jumlah_pembayaran');
            $table->string('bukti_pembayaran', 255);
            $table->enum('status_sewa', ['gagal', 'berhasil']);
            $table->unsignedBigInteger('pembelian_id');  // foreign key
            $table->timestamps();

            $table->foreign('pembelian_id')->references('id')->on('pembelian');  // foreign key
        });
    }

    public function down()
    {
        Schema::dropIfExists('pembayaran');
    }
}
