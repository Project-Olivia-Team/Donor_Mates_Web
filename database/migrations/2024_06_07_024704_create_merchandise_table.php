<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMerchandiseTable extends Migration
{
    public function up()
    {
        Schema::create('merchandise', function (Blueprint $table) {
            $table->id('merchandise_id');
            $table->string('nama_produk');
            $table->string('gambar');
            $table->decimal('harga', 10, 2);
            $table->integer('stock');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('merchandise');
    }
}

