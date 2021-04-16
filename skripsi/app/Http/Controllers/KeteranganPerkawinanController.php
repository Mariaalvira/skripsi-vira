<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


class PerkawinanController extends Controller
{
    public function index()
    {
    	return view('content.form.keterangan_perkawinan');
    }

     public function store_perkawinan(Request $request)
    {
    	
        DB::table('sakramen_perkawinan')->insert([
            'nama_lengkap' => $request->nama_lengkap,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'tempat_baptis' => $request->tempat_baptis,
            'tanggal_baptis' => $request->tanggal_baptis,
            'pekerjaan' => $request->pekerjaan,
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
