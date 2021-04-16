<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\BaptisAnak;
use Illuminate\Support\Facades\Storage;


class BaptisAnakController extends Controller
{
    public function index()
    {
    	return view('content.form.baptis_anak');
    }

    public function store_baptis_anak(Request $request)
    {
        $hari_lahir = $request->tanggal_lahir;
        $umur = Carbon::parse($hari_lahir)->age;

        $tanggal_pelaksanaan = Carbon::now()->addDay(3);

        $fc_surat_nikah_gereja = $request->file('fc_surat_nikah_gereja_orangtua');
        $fc_surat_nikah_sipil = $request->file('fc_surat_nikah_sipil_orangtua');
        $fc_surat_akte_kelahiran = $request->file('fc_akte_kelahiran');
        $fc_surat_nikah_wali = $request->file('fc_surat_nikah_gereja_wali_baptis');

        $save_fc_surat_nikah_gereja = $fc_surat_nikah_gereja->getClientOriginalName();
        $save_fc_surat_nikah_sipil = $fc_surat_akte_kelahiran->getClientOriginalName();
        $save_fc_surat_akte_kelahiran = $fc_surat_nikah_sipil->getClientOriginalName();
        $save_fc_surat_nikah_wali = $fc_surat_nikah_wali->getClientOriginalName();

        $tujuan_upload = 'gambar';

        $fc_surat_nikah_gereja->move($tujuan_upload,$save_fc_surat_nikah_gereja);
        $fc_surat_nikah_sipil->move($tujuan_upload,$save_fc_surat_nikah_sipil);
        $fc_surat_akte_kelahiran->move($tujuan_upload,$save_fc_surat_akte_kelahiran);
        $fc_surat_nikah_wali->move($tujuan_upload,$save_fc_surat_nikah_wali);

        DB::table('sakramen_baptis_anak')->insert([
            'nama_diri' => $request->nama_diri,
            'nama_baptis' => $request->nama_baptis,
            'tempat_lahir' => $request->tempat_lahir,
            'umur' => $umur,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'status_perkawinan_orangtua' =>$request->status_perkawinan_orangtua,
            'alamat_orangtua' => $request->alamat_orangtua,
            'nama_wali_baptis' => $request->nama_wali_baptis,
            'tempat_baptis' => $request->tempat_baptis,
            'dibaptis_oleh' => $request->dibaptis_oleh,
            'fc_surat_pernikahan_gereja_orangtua' => $save_fc_surat_nikah_gereja,
            'fc_surat_nikah_sipil_orangtua' => $save_fc_surat_nikah_sipil,
            'fc_akte_kelahiran' => $save_fc_surat_akte_kelahiran,
            'fc_surat_nikah_gereja_wali_baptis' => $save_fc_surat_nikah_wali,
            'tanggal_pelaksanaan' => $tanggal_pelaksanaan,
            'status_pembayaran' => 'belum'
        ]);

        return response()->json('berhasil upload dan simpan');
    }


    public function store_baptis_dewasa(Request $request)
    {
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
            'status_perkawinan_calon_baptis' =>
                $request->status_perkawinan_calon_baptis,
            'belajar_agama_sejak' => $request->belajar_agama_sejak,
            'mengikuti_perayaan_ekaristi_sejak' =>
                $request->mengikuti_perayaan_ekaristi_sejak,
            'mengikuti_kegiatan_lingkungan_sejak' =>
                $request->mengikuti_kegiatan_lingkungan_sejak,
            'nama_guru_agama' => $request->nama_guru_agama,
            'nama_wali_baptis' => $request->nama_wali_baptis,
            'tempat_baptis' => $request->tempat_baptis,
            'tanggal_baptis' => $request->tanggal_baptis,
            'dibaptis_oleh' => $request->dibaptis_oleh,
            // 'fc_akte_kelahiran'=>$request->fc_akte_kelahiran,
            // 'fc_surat_ganti_nama'=>$request->fc_surat_ganti_nama,
            // 'fc_surat_nikah_gereja'=>$request->fc_surat_nikah_gereja,
            // 'fc_surat_nikah_gereja_wali_baptis'=>$request->fc_surat_nikah_gereja_wali_baptis
        ]);

        return redirect('/baptis_dewasa');
    }

    public function store_komuni(Request $request)
    {
        DB::table('sakramen_komuni')->insert([
            'nama_diri' => $request->nama_diri,
            'nama_baptis' => $request->nama_baptis,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'buku_baptis' => $request->buku_baptis,
            'nama_sekolah' => $request->nama_sekolah,
            'lingkungan_paroki' => $request->lingkungan_paroki,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'alamat_orangtua' => $request->alamat_orangtua,
            'no_telepon' => $request->no_telepon,
            // 'fc_surat_baptis'=>$request->fc_surat_baptis
        ]);

        return redirect('/komuni');
    }

    public function store_penguatan(Request $request)
    {
        DB::table('sakramen_penguatan')->insert([
            'nama_diri' => $request->nama_diri,
            'nama_baptis' => $request->nama_baptis,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_baptis' => $request->tempat_baptis,
            'nomor_buku_baptis' => $request->nomor_buku_baptis,
            'tanggal_baptis' => $request->tanggal_baptis,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'alamat_calon' => $request->alamat_calon,
            'no_telepon' => $request->no_telepon,
            'st_pelindung_penguatan' => $request->st_pelindung_penguatan,
            'wali_penguatan' => $request->wali_penguatan,
            // 'fc_surat_baptis'=>$request->fc_surat_baptis
        ]);

        return redirect('/penguatan');
    }

    public function store_perkawinan(Request $request)
    {
        DB::table('sakramen_perkawinan')->insert([
            'nama_lengkap' => $request->nama_diri,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'lingkungan' => $request->lingkungan,
            'alamat' => $request->alamat,
            'nama_lengkap_pendamping' => $request->nama_lengkap_pendamping,
            'tempat_lahir_pendamping' => $request->tempat_lahir_pendamping,
            'tanggal_lahir_pendamping' => $request->tanggal_lahir_pendamping,
            'pekerjaan' => $request->pekerjaan,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'lingkungan' => $request->lingkungan,
            'alamat' => $request->alamat,
            'perkawinan_akan_dilangsungkan_digereja' =>
                $request->perkawinan_akan_dilangsungkan_digereja,
            'pada_hari' => $request->pada_hari,
            'pukul' => $request->pukul,
        ]);

        return redirect('/perkawinan');
    }

  //  public function edit($id){

    	//$sakramen = DB::tabel('sakramen')->where('sakramen_id',$id)->get();
    	//return view('edit',['sakramen' => $sakramen]);
    //}
    public function update(Request $request){
    	DB::table('sakramen_baptis')->insert([
            'nama_diri' => $request->nama_diri,
            'nama_baptis' => $request->nama_baptis,
            'tempat_lahir' => $request->tempat_lahir,
            'umur' => $umur,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nama_ayah' => $request->nama_ayah,
            'nama_ibu' => $request->nama_ibu,
            'status_perkawinan_orangtua' =>
                $request->status_perkawinan_orangtua,
            'alamat_orangtua' => $request->alamat_orangtua,
            'nama_wali_baptis' => $request->nama_wali_baptis,
            'tanggal_baptis' => $request->tanggal_baptis,
            'tempat_baptis' => $request->tempat_baptis,
            'dibaptis_oleh' => $request->dibaptis_oleh,
   ]);  return redirect('/sakramen');
    }



}
