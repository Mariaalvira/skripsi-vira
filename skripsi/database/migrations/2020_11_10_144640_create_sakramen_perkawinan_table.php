<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSakramenPerkawinanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sakramen_perkawinan', function (Blueprint $table) {
            $table->id('id_sakramen_perkawinan');
            $table->string('nama_lengkap_suami');
            $table->string('tempat_lahir_suami');
            $table->date('tanggal_lahir_suami');
            $table->string('tempat_baptis_suami');
            $table->date('tanggal_baptis_suami');
            $table->string('pekerjaan_suami');
            $table->string('nama_ayah_suami');
            $table->string('nama_ibu_suami');
            $table->string('lingkungan_suami');
            $table->string('alamat_suami');
            $table->char('no_telepon_suami', '12');
            $table->string('nama_lengkap_istri');
            $table->string('tempat_lahir_istri');
            $table->date('tanggal_lahir_istri');
            $table->string('tempat_baptis_istri');
            $table->date('tanggal_baptis_istri');
            $table->string('pekerjaan_istri');
            $table->string('nama_ayah_istri');
            $table->string('nama_ibu_istri');
            $table->string('lingkungan_istri');
            $table->string('alamat_istri');
            $table->char('no_telepon_istri', '12');
            $table->string('gereja_pemberkatan_nikah');
            $table->date('tanggal');
            $table->string('pukul');
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
        Schema::dropIfExists('sakramen_perkawinan');
    }
}
