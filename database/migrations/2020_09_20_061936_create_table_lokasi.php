<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLokasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lokasis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('TempatKesehatan');
            $table->integer('idFasilitas')->unsigned();
            $table->integer('idJenis')->unsigned();
            $table->string('Alamat');
            $table->string('noTelpon');
            $table->string('lokasi');
            $table->timestamps();
            $table->foreign('idFasilitas')->references('id')->on('fasilitas');
            $table->foreign('idJenis')->references('id')->on('jenis');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lokasis');
    }
}
