<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSakramenBaptisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sakramen_baptis', function (Blueprint $table) {
            $table->id('id_sakramen_baptis');
            $table->string('nama_diri');
            $table->string('nama_baptis');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->enum('umur', ['anak', 'dewasa']);
            $table->set('gereja', 'kua', 'catatan_sipil', 'cara_lain');
            $table->string('alamat_orangtua');
            $table->string('nama_wali_baptis');
            $table->string('tempat_baptis');
            $table->date('tanggal_baptis');
            $table->string('dibaptis_oleh');
            $table->string('fc_surat_pernikahan_gereja_orangtua');
            $table->string('fc_surat_nikah-sipil_orangtua');
            $table->string('fc_akte_kelahian');
            $table->string('fc_surat_nikah_gereja_wali_baptis');
            $table->string('fc_surat_ganti_nama');
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
        Schema::dropIfExists('sakramen_baptis');
    }
}
