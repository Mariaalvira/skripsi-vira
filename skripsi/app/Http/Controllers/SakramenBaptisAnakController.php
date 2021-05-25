<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\BaptisAnak;
use Illuminate\Support\Facades\Storage;

class SakramenBaptisAnakController extends Controller
{
    public function index()
    {
        return view('content.form.baptis_anak');
    }

    public function show_baptis_anak()
    {
        $datas = BaptisAnak::where('status_pembayaran', 'belum')->get();
        return view('content.admin.table.tabel_baptis_anak', compact('datas'));
    }

    public function store_baptis_anak(Request $request)
    {
        $hari_lahir = $request->tanggal_lahir;
        $umur = Carbon::parse($hari_lahir)->age;

        $tanggal_pelaksanaan = Carbon::now()->addDay(3);

        $fc_surat_nikah_gereja = $request->file(
            'fc_surat_nikah_gereja_orangtua'
        );
        $fc_surat_nikah_sipil = $request->file('fc_surat_nikah_sipil_orangtua');
        $fc_surat_akte_kelahiran = $request->file('fc_akte_kelahiran');
        $fc_surat_nikah_wali = $request->file(
            'fc_surat_nikah_gereja_wali_baptis'
        );

        $save_fc_surat_nikah_gereja = $fc_surat_nikah_gereja->getClientOriginalName();
        $save_fc_surat_nikah_sipil = $fc_surat_akte_kelahiran->getClientOriginalName();
        $save_fc_surat_akte_kelahiran = $fc_surat_nikah_sipil->getClientOriginalName();
        $save_fc_surat_nikah_wali = $fc_surat_nikah_wali->getClientOriginalName();

        $tujuan_upload = 'gambar';

        $fc_surat_nikah_gereja->move(
            $tujuan_upload,
            $save_fc_surat_nikah_gereja
        );
        $fc_surat_nikah_sipil->move($tujuan_upload, $save_fc_surat_nikah_sipil);
        $fc_surat_akte_kelahiran->move(
            $tujuan_upload,
            $save_fc_surat_akte_kelahiran
        );
        $fc_surat_nikah_wali->move($tujuan_upload, $save_fc_surat_nikah_wali);

        DB::table('sakramen_baptis_anak')->insert([
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
            'tempat_baptis' => $request->tempat_baptis,
            'dibaptis_oleh' => $request->dibaptis_oleh,
            'fc_surat_pernikahan_gereja_orangtua' => $save_fc_surat_nikah_gereja,
            'fc_surat_nikah_sipil_orangtua' => $save_fc_surat_nikah_sipil,
            'fc_akte_kelahiran' => $save_fc_surat_akte_kelahiran,
            'fc_surat_nikah_gereja_wali_baptis' => $save_fc_surat_nikah_wali,
            'tanggal_pelaksanaan' => $tanggal_pelaksanaan,
            'status_pembayaran' => 'belum',
        ]);

        return response()->json('berhasil upload dan simpan');
    }

    public function show_update($id)
    {
        $datas = BaptisAnak::find($id);
        return view(
            'content.admin.form-edit.edit_baptis_anak',
            compact('datas')
        );
    }

    public function update_baptis_anak(Request $request, $id)
    {
        $hari_lahir = $request->tanggal_lahir;
        $umur = Carbon::parse($hari_lahir)->age;

        $baptisAnak = BaptisAnak::find($id);
        $baptisAnak->nama_diri = $request->nama_diri;
        $baptisAnak->nama_baptis = $request->nama_baptis;
        $baptisAnak->tempat_lahir = $request->tempat_lahir;
        $baptisAnak->umur = $umur;
        $baptisAnak->tanggal_lahir = $request->tanggal_lahir;
        $baptisAnak->nama_ayah = $request->nama_ayah;
        $baptisAnak->nama_ibu = $request->nama_ibu;
        $baptisAnak->status_perkawinan_orangtua = $request->status_perkawinan_orangtua;
        $baptisAnak->alamat_orangtua = $request->alamat_orangtua;
        $baptisAnak->nama_wali_baptis = $request->nama_wali_baptis;
        $baptisAnak->tempat_baptis = $request->tempat_baptis;
        $baptisAnak->dibaptis_oleh = $request->dibaptis_oleh;
        $baptisAnak->save();

        return redirect('/admin/baptis-anak')->with('successMsg', 'Data Berhasil di Ubah');
    }

    //  public function edit($id){

    //$sakramen = DB::tabel('sakramen')->where('sakramen_id',$id)->get();
    //return view('edit',['sakramen' => $sakramen]);
    //}
}
