<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSakramenPenguatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sakramen_penguatan', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama_diri');
            $table->string('nama_baptis');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('tempat_baptis');
            $table->date('tanggal_baptis');
            $table->string('nomor_buku_baptis');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('alamat_calon');
            $table->char('no_telepon', '12');
            $table->string('paroki_asal');
            $table->string('nama_pelindung_penguatan');
            $table->string('nama_wali_penguatan');
            $table->string('fc_surat_baptis');
            $table->date('tanggal_pelaksanaan');
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
        Schema::dropIfExists('sakramen_penguatan');
    }
}
