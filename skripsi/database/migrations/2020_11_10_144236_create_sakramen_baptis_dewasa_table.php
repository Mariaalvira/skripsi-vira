<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSakramenBaptisDewasaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sakramen_baptis_dewasa', function (Blueprint $table) {
            $table->id('id');
            $table->foreignId('id_jadwal')->nullable()->references('id')->on('jadwals');
            $table->string('nama_diri');
            $table->string('nama_baptis');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('status_perkawinan_calon_baptis');
            $table->string('mengikuti_pelajaran_agama_sejak');
            $table->string('mengikuti_perayaan_ekaristi_sejak');
            $table->string('mengikuti_kegiatan_lingkungan_sejak');
            $table->string('nama_guru_agama_yang_mengajar');
            $table->string('nama_wali_baptis');
            $table->string('pemberkatan_dan_pembaptisan');
            $table->string('fc_akte_kelahiran');
            $table->string('fc_surat_ganti_nama');
            $table->string('fc_surat_nikah_calon_baptis');
            $table->string('fc_surat_nikah_gereja_wali_baptis');
            $table->date('batas_konfirmasi');
            $table->string('email');
            $table->string('status_pembayaran');
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
        Schema::dropIfExists('sakramen_baptis_dewasa');
    }
}
