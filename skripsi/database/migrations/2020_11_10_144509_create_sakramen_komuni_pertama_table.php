<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSakramenKomuniPertamaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sakramen_komuni_pertama', function (Blueprint $table) {
            $table->id('id');
            $table->string('nama_diri');
            $table->string('nama_baptis');
            $table->string('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->string('tempat_baptis');
            $table->date('tanggal_baptis');
            $table->string('buku_baptis');
            $table->string('nama_sekolah');
            $table->string('kelas');
            $table->string('lingkungan_paroki');
            $table->string('nama_ayah');
            $table->string('nama_ibu');
            $table->string('alamat_orangtua');
            $table->char('no_telepon', '12');
            $table->string('fc_surat_baptis');
            $table->date('tanggal_pelaksanaan');
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
        Schema::dropIfExists('sakramen_komuni_pertama');
    }
}
