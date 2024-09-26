<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePelangganTable extends Migration
{
    public function up()
    {
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id();  // id as primary key (auto-incrementing)
            $table->char('NIK', 16);
            $table->string('nomor_telepon', 16);
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('user'); 

        });
    }

    public function down()
    {
        Schema::dropIfExists('pelanggan');
    }
}
