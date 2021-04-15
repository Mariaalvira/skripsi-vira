<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


class PenguatanController extends Controller
{
    public function index()
    {
    	return view('content.form.penguatan');
    }

    public function store_penguatan(Request $request)
    {
    	$hari_lahir = $request->tanggal_lahir;
        $umur = Carbon::parse($hari_lahir)->age;

        $fc_surat_baptis = $request->file('fc_surat_baptis');

        $save_fc_surat_baptis = $fc_surat_baptis->getClientOriginalName();
        
        $tujuan_upload = 'gambar_penguatan';

        $fc_surat_baptis->move($tujuan_upload,$save_fc_surat_baptis);

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
        ]);

        return redirect('/penguatan');
    }