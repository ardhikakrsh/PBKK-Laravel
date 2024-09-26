<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelianTable extends Migration
{
    public function up()
    {
        Schema::create('pembelian', function (Blueprint $table) {
            $table->id();  // id as primary key (auto-incrementing)
            $table->date('tanggal_pembelian');
            $table->integer('total_harga');
            $table->unsignedBigInteger('user_id');  // foreign key
            $table->unsignedBigInteger('barang_id');  // foreign key
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('user');  // foreign key
            $table->foreign('barang_id')->references('id')->on('barang');  // foreign key
        });
    }

    public function down()
    {
        Schema::dropIfExists('pembelian');
    }
}
