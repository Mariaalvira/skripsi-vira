<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\SakramenKomuni;
use Illuminate\Support\Facades\Storage;


class SakramenKomuniController extends Controller
{
    public function index()
    {
    	return view('content.form.komuni_pertama');
    }

    public function show_komuni_pertama(){
        $datas = SakramenKomuni::where('status_pembayaran', 'belum')->get();
        return view('content.admin.table.table_komuni_pertama', compact('datas'));
    }

    public function store_komuni(Request $request)
    {
        $tanggal_pelaksanaan = Carbon::now()->addDay(3);

        $hari_lahir = $request->tanggal_lahir;
        $umur = Carbon::parse($hari_lahir)->age;

        $fc_surat_baptis = $request->file('fc_surat_baptis');

        $save_fc_surat_baptis = $fc_surat_baptis->getClientOriginalName();

        $tujuan_upload = 'gambar_komuni';

        $fc_surat_baptis->move($tujuan_upload,$save_fc_surat_baptis);

        $sakramenKomuni = new SakramenKomuni;
        $sakramenKomuni->nama_diri = $request->nama_diri;
        $sakramenKomuni->nama_baptis = $request->nama_baptis;
        $sakramenKomuni->tempat_lahir = $request->tempat_lahir;
        $sakramenKomuni->tanggal_lahir = $request->tanggal_lahir;
        $sakramenKomuni->tempat_baptis = $request->tempat_baptis;
        $sakramenKomuni->tanggal_baptis = $request->tanggal_baptis;
        $sakramenKomuni->buku_baptis = $request->buku_baptis;
        $sakramenKomuni->nama_sekolah = $request->nama_sekolah;
        $sakramenKomuni->kelas = $request->kelas;
        $sakramenKomuni->lingkungan_paroki = $request->lingkungan_paroki;
        $sakramenKomuni->nama_ayah = $request->nama_ayah;
        $sakramenKomuni->nama_ibu = $request->nama_ibu;
        $sakramenKomuni->alamat_orangtua = $request->alamat_orangtua;
        $sakramenKomuni->no_telepon = $request->no_telepon;
        $baptisDewasa->email = $request->email;
        $sakramenKomuni->fc_surat_baptis = $save_fc_surat_baptis;
        $sakramenKomuni->tanggal_pelaksanaan = $tanggal_pelaksanaan;
        $sakramenKomuni->status_pembayaran = 'belum';
        $sakramenKomuni->save();

         return response()->json($sakramenKomuni);
    }

    public function show_update($id)
    {
        $datas = SakramenKomuni::find($id);
        return view(
            'content.admin.form-edit.edit_sakramen_komuni',
            compact(datas)
        );
    }

    public function update_sakramen_komuni(Request $request, $id)
    {
        $sakramenKomuni = SakramenKomuni::find($id);
        $sakramenKomuni->nama_diri = $request->nama_diri;
        $sakramenKomuni->nama_baptis = $request->nama_baptis;
        $sakramenKomuni->tempat_lahir = $request->tempat_lahir;
        $sakramenKomuni->tanggal_lahir = $request->tanggal_lahir;
        $sakramenKomuni->tempat_baptis = $request->tempat_baptis;
        $sakramenKomuni->tanggal_baptis = $request->tanggal_baptis;
        $sakramenKomuni->buku_baptis = $request->buku_baptis;
        $sakramenKomuni->nama_sekolah = $request->nama_sekolah;
        $sakramenKomuni->kelas = $request->kelas;
        $sakramenKomuni->lingkungan_paroki = $request->lingkungan_paroki;
        $sakramenKomuni->nama_ayah = $request->nama_ayah;
        $sakramenKomuni->nama_ibu = $request->nama_ibu;
        $sakramenKomuni->alamat_orangtua = $request->alamat_orangtua;
        $sakramenKomuni->no_telepon = $request->no_telepon;
        $baptisDewasa->email = $request->email;
        $sakramenKomuni->save();

        return redirect('/admin/sakramen-komuni')->with('successMsg', 'Data Berhasil di Ubah');
    }

}
