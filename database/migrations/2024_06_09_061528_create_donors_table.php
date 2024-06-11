<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->id('donor_id');
            $table->string('NIK')->unique();
            $table->string('nama');
            $table->text('alamat');
            $table->date('tgl_lahir');
            $table->integer('umur');
            $table->integer('berat_badan');
            $table->string('gol_darah');
            $table->text('riwayat');
            $table->string('no_hp');
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
        Schema::dropIfExists('donors');
    }
}
