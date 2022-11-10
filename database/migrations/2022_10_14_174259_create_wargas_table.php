<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWargasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wargas', function (Blueprint $table) {
            $table->id();
            $table->string("kk",16) ->nullable();
            $table->string("nik_warga",16) ->nullable();
            $table->string("nama_warga",50) ->nullable();
            $table->enum("jenis_kelamin", ["Laki-laki", "Perempuan"])->nullable();
            $table->string("tmpt_lahir",50) ->nullable();
            $table->date("tgl_lahir") ->nullable();
            $table->string("gol_darah",50) ->nullable();
            $table->string("agama",50) ->nullable();
            $table->enum("status_perkawinan", ["Kawin", "Belum Kawin"]) ->nullable();
            $table->enum("shdk", ["Kepala Keluarga", "Istri", "Anak"]) ->nullable();
            $table->string("pendidikan_akhir",50) ->nullable();
            $table->string("pekerjaan",50) ->nullable();
            $table->string("nama_ibu",50) ->nullable();
            $table->string("nama_ayah",50) ->nullable();
            $table->string("alamat",225) ->nullable();
            $table->string("kelurahan",50) ->nullable();
            $table->string("rt",50) ->nullable();
            $table->string("foto", 225) ->nullable();
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
        Schema::dropIfExists('wargas');
    }
}
