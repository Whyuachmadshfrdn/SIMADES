<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLampiranPengajuanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lampiran_pengajuan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('pengajuan_id');
            $table->string('item', 255);
            $table->string('value', 255);
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
        Schema::dropIfExists('lampiran_pengajuan');
    }
}
