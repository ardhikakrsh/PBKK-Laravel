<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();  // id as primary key (auto-incrementing)
            $table->string('nama', 225);
            $table->integer('harga');
            $table->integer('ukuran');
            $table->text('deskripsi');
            $table->string('foto');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
