<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\BaptisDewasa;
use App\Jadwal;
use Illuminate\Support\Facades\Storage;
use App\Mail\EmailBaptisDewasa;
use Illuminate\Support\Facades\Mail;

use PDF;


class SakramenBaptisDewasaController extends Controller
{
    public function index()
    {
        return view('content.form.baptis_dewasa');
    }

    public function show_baptis_dewasa()
    {
        $datas = BaptisDewasa::get();
        return view(
            'content.admin.table.table_baptis_dewasa',
            compact('datas')
        );
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

        $fc_surat_nikah_gereja->move(
            $tujuan_upload,
            $save_fc_surat_nikah_gereja
        );
        $fc_surat_ganti_nama->move($tujuan_upload, $save_fc_surat_ganti_nama);
        $fc_surat_akte_kelahiran->move(
            $tujuan_upload,
            $save_fc_surat_akte_kelahiran
        );
        $fc_surat_nikah_wali->move($tujuan_upload, $save_fc_surat_nikah_wali);

        if ($umur < 16) {
            return redirect('/baptis-dewasa')->with('errorMsg', 'Umur Kurang Dari Batas');
        }

        $baptisDewasa = new BaptisDewasa();
        $baptisDewasa->nama_diri = $request->nama_diri;
        $baptisDewasa->nama_baptis = $request->nama_baptis;
        $baptisDewasa->tempat_lahir = $request->tempat_lahir;
        $baptisDewasa->tanggal_lahir = $request->tanggal_lahir;
        $baptisDewasa->alamat = $request->alamat;
        $baptisDewasa->nama_ayah = $request->nama_ayah;
        $baptisDewasa->nama_ibu = $request->nama_ibu;
        $baptisDewasa->status_perkawinan_calon_baptis =
            $request->status_perkawinan_calon_baptis;
        $baptisDewasa->mengikuti_pelajaran_agama_sejak =
            $request->mengikuti_pelajaran_agama_sejak;
        $baptisDewasa->mengikuti_perayaan_ekaristi_sejak =
            $request->mengikuti_perayaan_ekaristi_sejak;
        $baptisDewasa->mengikuti_kegiatan_lingkungan_sejak =
            $request->mengikuti_kegiatan_lingkungan_sejak;
        $baptisDewasa->nama_guru_agama_yang_mengajar =
            $request->nama_guru_agama_yang_mengajar;
        $baptisDewasa->nama_wali_baptis = $request->nama_wali_baptis;
        $baptisDewasa->pemberkatan_dan_pembaptisan =
            $request->pemberkatan_dan_pembaptisan;
        $baptisDewasa->email = $request->email;
        $baptisDewasa->fc_akte_kelahiran = $save_fc_surat_akte_kelahiran;
        $baptisDewasa->fc_surat_ganti_nama = $save_fc_surat_ganti_nama;
        $baptisDewasa->fc_surat_nikah_calon_baptis = $save_fc_surat_nikah_gereja;
        $baptisDewasa->fc_surat_nikah_gereja_wali_baptis = $save_fc_surat_nikah_wali;
        $baptisDewasa->batas_konfirmasi = $tanggal_pelaksanaan;
        $baptisDewasa->status_pembayaran = 'belum';
        $baptisDewasa->save();

        Mail::to($baptisDewasa->email)->send(new EmailBaptisDewasa());

        return redirect('/baptis-dewasa')->with('successMsg', 'Data Berhasil di Simpan');
    }

    public function show_update($id)
    {

        $datas = BaptisDewasa::find($id);
        return view(
            'content.admin.form-edit.edit_baptis_dewasa',
            compact('datas')
        );
    }

    public function update_baptis_dewasa(Request $request, $id)
    {
        $hari_lahir = $request->tanggal_lahir;
        $umur = Carbon::parse($hari_lahir)->age;

        $baptisDewasa = BaptisDewasa::find($id);
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
        $baptisDewasa->save();

        return redirect('/admin/baptis-dewasa')->with('successMsg', 'Data Berhasil di Ubah');
    }


    public function cetak_pdf($id)
    {
        $data = BaptisDewasa::find($id);
        $pdf = PDF::loadview('content.admin.cetak-pdf.baptis_dewasa_pdf',['data' => $data]);
        return $pdf->stream();
    }

    public function updateJadwal($id)
    {
        $baptisDewasa = BaptisDewasa::find($id);
        $jadwal = Jadwal::where('nama_sakramen', 'Baptis Dewasa')->where('periode', Carbon::now()->format('Y'))->first();
        $baptisDewasa->id_jadwal = $jadwal->id;
        $baptisDewasa->status_pembayaran = 'sudah';
        $baptisDewasa->save();
       return redirect('/admin/baptis-dewasa')->with('successMsg', 'Pembayaran Telah Dilakukan');
    }

    public function detail_baptis_dewasa($id)
    {
        $data = BaptisDewasa::find($id);
        return view('content.admin.detail.baptis_dewasa_detail', compact('data'));
    }
}