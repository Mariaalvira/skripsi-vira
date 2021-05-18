<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\BaptisDewasa;
use Illuminate\Support\Facades\Storage;


class SakramenBaptisDewasaController extends Controller
{
    public function index()
    {
    	return view('content.form.baptis_dewasa');
    }

    public function show_baptis_dewasa(){
        $datas = BaptisDewasa::where('status_pembayaran', 'belum')->get();
        return view('content.admin.table.table_baptis_dewasa', compact('datas'));
    }

    public function store_baptis_dewasa(Request $request)
    {
    	$tanggal_pelaksanaan = Carbon::now()->addDay(3);

    	$hari_lahir = $request->tanggal_lahir;
        $umur = Carbon::parse($hari_lahir)->age;

        $fc_surat_nikah_gereja = $request->file('fc_surat_nikah');
        $fc_surat_ganti_nama = $request->file('fc_surat_ganti_nama');
        $fc_surat_akte_kelahiran = $request->file('fc_akte_kelahiran');
        $fc_surat_nikah_wali = $request->file('fc_surat_nikah_wali_baptis');

        $save_fc_surat_nikah_gereja = $fc_surat_nikah_gereja->getClientOriginalName();
        $save_fc_surat_ganti_nama = $fc_surat_ganti_nama->getClientOriginalName();
        $save_fc_surat_akte_kelahiran = $fc_surat_akte_kelahiran->getClientOriginalName();
        $save_fc_surat_nikah_wali = $fc_surat_nikah_wali->getClientOriginalName();

        $tujuan_upload = 'gambar_baptisdewasa';

        $fc_surat_nikah_gereja->move($tujuan_upload,$save_fc_surat_nikah_gereja);
        $fc_surat_ganti_nama->move($tujuan_upload,$save_fc_surat_ganti_nama);
        $fc_surat_akte_kelahiran->move($tujuan_upload,$save_fc_surat_akte_kelahiran);
        $fc_surat_nikah_wali->move($tujuan_upload,$save_fc_surat_nikah_wali);

        $baptisDewasa = new BaptisDewasa;
        $baptisDewasa->nama_diri = $request->nama_diri;
        $baptisDewasa->nama_baptis = $request->nama_baptis;
        $baptisDewasa->tempat_lahir = $request->tempat_lahir;
        $baptisDewasa->tanggal_lahir = $request->tanggal_lahir;
        $baptisDewasa->alamat = $request->alamat;
        $baptisDewasa->nama_ayah = $request->nama_ayah;
        $baptisDewasa->nama_ibu = $request->nama_ibu;
        $baptisDewasa->status_perkawinan_calon_baptis = $request->status_perkawinan_calon_baptis;
        $baptisDewasa->mengikuti_pelajaran_agama_sejak = $request->mengikuti_pelajaran_agama_sejak;
        $baptisDewasa->mengikuti_perayaan_ekaristi_sejak = $request->mengikuti_perayaan_ekaristi_sejak;
        $baptisDewasa->mengikuti_kegiatan_lingkungan_sejak = $request->mengikuti_kegiatan_lingkungan_sejak;
        $baptisDewasa->nama_guru_agama_yang_mengajar = $request->nama_guru_agama_yang_mengajar;
        $baptisDewasa->nama_wali_baptis = $request->nama_wali_baptis;
        $baptisDewasa->pemberkatan_dan_pembaptisan = $request->pemberkatan_dan_pembaptisan;
        $baptisDewasa->fc_akte_kelahiran = $save_fc_surat_akte_kelahiran;
        $baptisDewasa->fc_surat_ganti_nama = $save_fc_surat_ganti_nama;
        $baptisDewasa->fc_surat_nikah_calon_baptis = $save_fc_surat_nikah_gereja;
        $baptisDewasa->fc_surat_nikah_gereja_wali_baptis = $save_fc_surat_nikah_wali;
        $baptisDewasa->tanggal_pelaksanaan = $tanggal_pelaksanaan;
        $baptisDewasa->status_pembayaran = 'belum';
        $baptisDewasa->save();

        return response()->json($baptisDewasa);
    }
 }
