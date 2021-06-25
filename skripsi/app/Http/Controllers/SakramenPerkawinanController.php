<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\SakramenPerkawinan;
use App\Jadwal;
use Illuminate\Support\Facades\Storage;
use App\Mail\EmailSakramenPerkawinan;
use Illuminate\Support\Facades\Mail;

use PDF;


class SakramenPerkawinanController extends Controller
{
    public function index()
    {
    	return view('content.form.keterangan_perkawinan');
    }

    public function show_perkawinan(){
        $datas = SakramenPerkawinan::get();
        return view('content.admin.table.table_perkawinan', compact('datas'));
    }

    public function store_perkawinan(Request $request)
    {
        $batas_konfirmasi = Carbon::now()->addDay(3);
        $sakramenPerkawinan = new SakramenPerkawinan;
        $sakramenPerkawinan->nama_lengkap_suami = $request->nama_lengkap_suami;
        $sakramenPerkawinan->tempat_lahir_suami = $request->tempat_lahir_suami;
        $sakramenPerkawinan->tanggal_lahir_suami = $request->tanggal_lahir_suami;
        $sakramenPerkawinan->tempat_baptis_suami = $request->tempat_baptis_suami;
        $sakramenPerkawinan->tanggal_baptis_suami = $request->tanggal_baptis_suami;
        $sakramenPerkawinan->pekerjaan_suami = $request->pekerjaan_suami;
        $sakramenPerkawinan->nama_ibu_suami = $request->nama_ibu_suami;
        $sakramenPerkawinan->nama_ayah_suami = $request->nama_ayah_suami;
        $sakramenPerkawinan->lingkungan_suami = $request->lingkungan_suami;
        $sakramenPerkawinan->alamat_suami = $request->alamat_suami;
        $sakramenPerkawinan->no_telepon_suami = $request->no_telepon_suami;
        $sakramenPerkawinan->nama_lengkap_istri = $request->nama_lengkap_istri;
        $sakramenPerkawinan->tempat_lahir_istri = $request->tempat_lahir_istri;
        $sakramenPerkawinan->tanggal_lahir_istri = $request->tanggal_lahir_istri;
        $sakramenPerkawinan->tempat_baptis_istri = $request->tempat_baptis_istri;
        $sakramenPerkawinan->tanggal_baptis_istri = $request->tanggal_baptis_istri;
        $sakramenPerkawinan->pekerjaan_istri = $request->pekerjaan_istri;
        $sakramenPerkawinan->nama_ibu_istri = $request->nama_ibu_istri;
        $sakramenPerkawinan->nama_ayah_istri = $request->nama_ayah_istri;
        $sakramenPerkawinan->lingkungan_istri = $request->lingkungan_istri;
        $sakramenPerkawinan->alamat_istri = $request->alamat_istri;
        $sakramenPerkawinan->no_telepon_istri = $request->no_telepon_istri;
        $sakramenPerkawinan->gereja_pemberkatan_nikah = $request->gereja_pemberkatan_nikah;
        $sakramenPerkawinan->tanggal = $request->tanggal;
        $sakramenPerkawinan->pukul = $request->pukul;
        $sakramenPerkawinan->email = $request->email;
        $sakramenPerkawinan->batas_konfirmasi = $batas_konfirmasi;
        $sakramenPerkawinan->status_pembayaran = 'belum';
        $sakramenPerkawinan->save();

        Mail::to($sakramenPerkawinan->email)->send(new EmailSakramenPerkawinan());

        return redirect('/perkawinan')->with('successMsg', 'Data Berhasil di Tambah');
    }

    public function show_update($id)
    {
        $datas = SakramenPerkawinan::find($id);
        return view(
            'content.admin.form-edit.edit_perkawinan',
            compact('datas')
        );
    }

    public function update_sakramen_perkawinan(Request $request, $id)
    {
        $sakramenPerkawinan = SakramenPerkawinan::find($id);
        $sakramenPerkawinan->nama_lengkap_suami = $request->nama_lengkap_suami;
        $sakramenPerkawinan->tempat_lahir_suami = $request->tempat_lahir_suami;
        $sakramenPerkawinan->tanggal_lahir_suami = $request->tanggal_lahir_suami;
        $sakramenPerkawinan->tempat_baptis_suami = $request->tempat_baptis_suami;
        $sakramenPerkawinan->tanggal_baptis_suami = $request->tanggal_baptis_suami;
        $sakramenPerkawinan->pekerjaan_suami = $request->pekerjaan_suami;
        $sakramenPerkawinan->nama_ibu_suami = $request->nama_ibu_suami;
        $sakramenPerkawinan->nama_ayah_suami = $request->nama_ayah_suami;
        $sakramenPerkawinan->lingkungan_suami = $request->lingkungan_suami;
        $sakramenPerkawinan->alamat_suami = $request->alamat_suami;
        $sakramenPerkawinan->no_telepon_suami = $request->no_telepon_suami;
        $sakramenPerkawinan->nama_lengkap_istri = $request->nama_lengkap_istri;
        $sakramenPerkawinan->tempat_lahir_istri = $request->tempat_lahir_istri;
        $sakramenPerkawinan->tanggal_lahir_istri = $request->tanggal_lahir_istri;
        $sakramenPerkawinan->tempat_baptis_istri = $request->tempat_baptis_istri;
        $sakramenPerkawinan->tanggal_baptis_istri = $request->tanggal_baptis_istri;
        $sakramenPerkawinan->pekerjaan_istri = $request->pekerjaan_istri;
        $sakramenPerkawinan->nama_ibu_istri = $request->nama_ibu_istri;
        $sakramenPerkawinan->nama_ayah_istri = $request->nama_ayah_istri;
        $sakramenPerkawinan->lingkungan_istri = $request->lingkungan_istri;
        $sakramenPerkawinan->alamat_istri = $request->alamat_istri;
        $sakramenPerkawinan->no_telepon_istri = $request->no_telepon_istri;
        $sakramenPerkawinan->gereja_pemberkatan_nikah = $request->gereja_pemberkatan_nikah;
        $sakramenPerkawinan->tanggal = $request->tanggal;
        $sakramenPerkawinan->pukul = $request->pukul;
        $sakramenPerkawinan->email = $request->email;
        $sakramenPerkawinan->save();

        return redirect('/admin/perkawinan')->with('successMsg', 'Data Berhasil di Ubah');
    }

    public function cetak_pdf($id)
    {
        $data = SakramenPerkawinan::find($id);
        $pdf = PDF::loadview('content.admin.cetak-pdf.perkawinan_pdf',['data' => $data]);
        return $pdf->stream();
    }

    public function updateJadwal($id)
    {
        $sakramenPerkawinan = SakramenPerkawinan::find($id);
        $jadwal = Jadwal::where('nama_sakramen', 'Perkawinan')->where('periode', Carbon::now()->format('Y'))->first();
        $sakramenPerkawinan->id_jadwal = $jadwal->id;
        $sakramenPerkawinan->status_pembayaran = 'sudah';
        $sakramenPerkawinan->save();
       return redirect('/admin/perkawinan')->with('successMsg', 'Pembayaran Telah Dilakukan');
    }

    public function detail_perkawinan($id)
    {
        $data = SakramenPerkawinan::find($id);
        return view('content.admin.detail.perkawinan_detail', compact('data'));
    }
}