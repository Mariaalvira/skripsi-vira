<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Jadwal;
use Illuminate\Support\Facades\Storage;


class JadwalController extends Controller
{

	public function index()
	{
        $datas = Jadwal::all();
		return view('content.admin.table.tabel_jadwal', compact('datas'));
	}

	public function show_jadwal()
	{
        return view('content.form.jadwal');
	}

	public function store_jadwal(Request $request)
	{
        $jadwals = new Jadwal;
        $jadwals->jadwal = $request->jadwal;
        $jadwals->biaya = $request->biaya;
        $jadwals->periode = $request->periode;
        $jadwals->nama_sakramen = $request->nama_sakramen;
        $jadwals->save();

        return redirect('/admin/jadwal')->with('successMsg', 'Data Berhasil di Tambah');
	}

	public function show_update($id)
    {
        $datas = Jadwal::find($id);
        return view(
            'content.admin.form-edit.edit_jadwal',
            compact('datas')
        );
    }

    public function update_jadwal(Request $request, $id)
    {
    	$jadwals = Jadwal::find($id);
    	$jadwals->jadwal = $request->jadwal;
        $jadwals->biaya = $request->biaya;
        $jadwals->periode = $request->periode;
        $jadwals->nama_sakramen = $request->nama_sakramen;
    	$jadwals->save();

    	return redirect('/admin/jadwal')->with('successMsg', 'Data Berhasil di Ubah');
    }


}
