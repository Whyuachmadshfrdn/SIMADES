<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string("nip_staff",50) ->nullable();
            $table->string("nama_staff",50) ->nullable();
            $table->string("tmpt_lahir",50) ->nullable();
            $table->date("tgl_lahir") ->nullable();
            $table->enum("jenis_kelamin", ["Laki-laki", "Perempuan"])->nullable();
            $table->string("jabatan",50) ->nullable();
            $table->string("no_telp",50) ->nullable();
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
        Schema::dropIfExists('staff');
    }
}
