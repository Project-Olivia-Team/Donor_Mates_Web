<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTglDonorToDonorsTable extends Migration
{
    public function up()
    {
        Schema::table('donors', function (Blueprint $table) {
            $table->date('tgl_donor')->nullable()->after('no_hp');
        });
    }

    public function down()
    {
        Schema::table('donors', function (Blueprint $table) {
            $table->dropColumn('tgl_donor');
        });
    }
}
