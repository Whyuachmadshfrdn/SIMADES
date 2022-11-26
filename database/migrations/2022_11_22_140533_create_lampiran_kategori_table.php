<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLampiranKategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lampiran_kategori', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('kategori_id');
            $table->string('title', 225) ->nullable();
            $table->string('name', 225) ->nullable();
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
        Schema::dropIfExists('lampiran_kategori');
    }
}
