<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTablePendaftaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Nodaftar');
            $table->date('TglDaftar');
            $table->integer('NIK')->unsigned();
            $table->integer('idLokasi')->unsigned();
            $table->date('TglPerikasa');
            $table->date('TotalBiaya');
            $table->integer('idPetugas')->unsigned();
            $table->timestamps();
            $table->foreign('NIk')->references('id')->on('customers');
            $table->foreign('idLokasi')->references('id')->on('lokasis');
            $table->foreign('idPetugas')->references('id')->on('petugas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftarans');
    }
}
