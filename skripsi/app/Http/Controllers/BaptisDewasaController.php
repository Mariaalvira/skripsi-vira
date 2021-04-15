<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


class BaptisDewasaController extends Controller
{
    public function index()
    {
    	return view('content.form.baptis_dewasa');
    }

    public function store_baptis_dewasa(Request $request)
    {

    	$hari_lahir = $request->tanggal_lahir;
        $umur = Carbon::parse($hari_lahir)->age;

        $fc_surat_nikah_gereja = $request->file('fc_surat_nikah_gereja');
        $fc_surat_ganti_nama = $request->file('fc_surat_nikah_ganti_nama');
        $fc_surat_akte_kelahiran = $request->file('fc_akte_kelahiran');
        $fc_surat_nikah_wali = $request->file('fc_surat_nikah_gereja_wali_baptis');

        $save_fc_surat_nikah_gereja = $fc_surat_nikah_gereja->getClientOriginalName();
        $save_fc_surat_ganti_nama = $fc_surat_ganti_nama->getClientOriginalName();
        $save_fc_surat_akte_kelahiran = $fc_surat_nikah_sipil->getClientOriginalName();
        $save_fc_surat_nikah_wali = $fc_surat_nikah_wali->getClientOriginalName();

        $tujuan_upload = 'gambar_baptisdewasa';

        $fc_surat_nikah_gereja->move($tujuan_upload,$save_fc_surat_nikah_gereja);
        $fc_surat_ganti_nama->move($tujuan_upload,$save_fc_surat_ganti_nama);
        $fc_surat_akte_kelahiran->move($tujuan_upload,$save_fc_surat_akte_kelahiran);
        $fc_surat_nikah_wali->move($tujuan_upload,$save_fc_surat_nikah_wali);

        DB::table('sakramen_baptis_dewasa')->insert([
            'lingkungan' => $request->lingkungan,
            'nama_diri' => $request->nama_diri,
            'nama_baptis' => $request->nama_baptis,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'alamat' => $request->alamat,
            'no_telepon' => $request->no_telepon,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'status_perkawinan_calon_baptis' => $request->status_perkawinan_calon_baptis,
            'belajar_agama_sejak' => $request->belajar_agama_sejak,
            'mengikuti_perayaan_ekaristi_sejak' => $request->mengikuti_perayaan_ekaristi_sejak,
            'mengikuti_kegiatan_lingkungan_sejak' => $request->mengikuti_kegiatan_lingkungan_sejak,
            'nama_guru_agama' => $request->nama_guru_agama,
            'nama_wali_baptis' => $request->nama_wali_baptis,
            'tempat_baptis' => $request->tempat_baptis,
            'tanggal_baptis' => $request->tanggal_baptis,
            'dibaptis_oleh' => $request->dibaptis_oleh,
        ]);

        return redirect('/baptis_dewasa');
    }
 }