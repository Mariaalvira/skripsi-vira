<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\SakramenPenguatan;
use App\Jadwal;
use Illuminate\Support\Facades\Storage;
use App\Mail\EmailSakramenPenguatan;
use Illuminate\Support\Facades\Mail;

use PDF;

class SakramenPenguatanController extends Controller
{
    public function index()
    {
        return view('content.form.penguatan');
    }

    public function show_penguatan()
    {
        $datas = SakramenPenguatan::get();
        return view('content.admin.table.tabel_penguatan', compact('datas'));
    }

    public function store_penguatan(Request $request)
    {
        $tanggal_pelaksanaan = Carbon::now()->addDay(3);

        // $hari_lahir = $request->tanggal_lahir;
        // $umur = Carbon::parse($hari_lahir)->age;

        $fc_surat_baptis = $request->file('fc_surat_baptis');

        $save_fc_surat_baptis = $fc_surat_baptis->getClientOriginalName();

        $tujuan_upload = 'gambar_penguatan';

        $fc_surat_baptis->move($tujuan_upload, $save_fc_surat_baptis);

        $sakramenPenguatan = new SakramenPenguatan();
        $sakramenPenguatan->nama_diri = $request->nama_diri;
        $sakramenPenguatan->nama_baptis = $request->nama_baptis;
        $sakramenPenguatan->tempat_lahir = $request->tempat_lahir;
        $sakramenPenguatan->tanggal_lahir = $request->tanggal_lahir;
        $sakramenPenguatan->tempat_baptis = $request->tempat_baptis;
        $sakramenPenguatan->tanggal_baptis = $request->tanggal_baptis;
        $sakramenPenguatan->nomor_buku_baptis = $request->nomor_buku_baptis;
        $sakramenPenguatan->nama_ayah = $request->nama_ayah;
        $sakramenPenguatan->nama_ibu = $request->nama_ibu;
        $sakramenPenguatan->alamat_calon = $request->alamat_calon;
        $sakramenPenguatan->no_telepon = $request->no_telepon;
        $sakramenPenguatan->paroki_asal = $request->paroki_asal;
        $sakramenPenguatan->nama_pelindung_penguatan = $request->nama_pelindung_penguatan;
        $sakramenPenguatan->nama_wali_penguatan = $request->nama_wali_penguatan;
        $sakramenPenguatan->email = $request->email;
        $sakramenPenguatan->fc_surat_baptis = $save_fc_surat_baptis;
        $sakramenPenguatan->batas_konfirmasi = $tanggal_pelaksanaan;
        $sakramenPenguatan->status_pembayaran = 'belum';
        $sakramenPenguatan->save();

         Mail::to($sakramenPenguatan->email)->send(new EmailSakramenPenguatan());

        return redirect('/penguatan')->with('successMsg', 'Data Berhasil di Tambah');    }

    public function show_update($id)
    {
        $datas = SakramenPenguatan::find($id);
        return view(
            'content.admin.form-edit.edit_penguatan',
            compact('datas')
        );
    }

    public function update_sakramen_penguatan(Request $request, $id)
    {
        $sakramenPenguatan = SakramenPenguatan::find($id);
        $sakramenPenguatan->nama_diri = $request->nama_diri;
        $sakramenPenguatan->nama_baptis = $request->nama_baptis;
        $sakramenPenguatan->tempat_lahir = $request->tempat_lahir;
        $sakramenPenguatan->tanggal_lahir = $request->tanggal_lahir;
        $sakramenPenguatan->tempat_baptis = $request->tempat_baptis;
        $sakramenPenguatan->tanggal_baptis = $request->tanggal_baptis;
        $sakramenPenguatan->nomor_buku_baptis = $request->nomor_buku_baptis;
        $sakramenPenguatan->nama_ayah = $request->nama_ayah;
        $sakramenPenguatan->nama_ibu = $request->nama_ibu;
        $sakramenPenguatan->alamat_calon = $request->alamat_calon;
        $sakramenPenguatan->no_telepon = $request->no_telepon;
        $sakramenPenguatan->paroki_asal = $request->paroki_asal;
        $sakramenPenguatan->nama_pelindung_penguatan = $request->nama_pelindung_penguatan;
        $sakramenPenguatan->nama_wali_penguatan = $request->nama_wali_penguatan;
        $sakramenPenguatan->email = $request->email;
        $sakramenPenguatan->save();

        return redirect('/admin/penguatan')->with('successMsg', 'Data Berhasil di Ubah');
    }

    public function cetak_pdf($id)
    {
        $data = SakramenPenguatan::find($id);
        $pdf = PDF::loadview('content.admin.cetak-pdf.penguatan_pdf',['data' => $data]);
        return $pdf->stream();
    }

    public function updateJadwal($id)
    {
        $sakramenPenguatan = SakramenPenguatan::find($id);
        $jadwal = Jadwal::where('nama_sakramen', 'Penguatan')->where('periode', Carbon::now()->format('Y'))->first();
        $sakramenPenguatan->id_jadwal = $jadwal->id;
        $sakramenPenguatan->status_pembayaran = 'sudah';
        $sakramenPenguatan->save();
       return redirect('/admin/penguatan')->with('successMsg', 'Pembayaran Telah Dilakukan');
    }

    public function detail_penguatan($id)
    {
        $data = SakramenPenguatan::find($id);
        return view('content.admin.detail.penguatan_detail', compact('data'));
    }

}