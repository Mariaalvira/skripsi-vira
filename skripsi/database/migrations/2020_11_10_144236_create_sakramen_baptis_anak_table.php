<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSakramenBaptisAnakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sakramen_baptis_anak', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama_diri');
            $table->string('nama_baptis');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('umur');
            $table->string('status_perkawinan_orangtua');
            $table->string('alamat_orangtua');
            $table->string('nama_wali_baptis');
            $table->string('tempat_baptis');
            $table->string('dibaptis_oleh');
            $table->string('fc_surat_pernikahan_gereja_orangtua');
            $table->string('fc_surat_nikah_sipil_orangtua');
            $table->string('fc_akte_kelahiran');
            $table->string('fc_surat_nikah_gereja_wali_baptis');
            $table->string('status_pembayaran');
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
        Schema::dropIfExists('sakramen_baptis_anak');
    }
}
