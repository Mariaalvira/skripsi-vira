<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


class KomuniController extends Controller
{
    public function index()
    {
    	return view('content.form.komuni_pertama');
    }

    public function store_komuni(Request $request)
    {
        $hari_lahir = $request->tanggal_lahir;
        $umur = Carbon::parse($hari_lahir)->age;

        $fc_surat_baptis = $request->file('fc_surat_baptis');

        $save_fc_surat_baptis = $fc_surat_baptis->getClientOriginalName();
        
        $tujuan_upload = 'gambar_komuni';

        $fc_surat_baptis->move($tujuan_upload,$save_fc_surat_baptis);
        
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
        ]);

        return redirect('/sakramen_komuni_pertama');
    }

}