@extends('layouts.admin')

@section('content')
    @php
    $tanggal_lahir = date_create($data->tanggal_lahir);
    $hari_ini = date_create(date('Y-m-d'));
    @endphp
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <u>
                <h2 id="judul">Formulir Pendaftaran Baptis Dewasa</h2>
            </u>
            <br><br>
            <table style="font-size: 20px; height: 200px">
                <tr>
                    <td style="width: 30%;">Nama Diri</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 30%;">{{ $data->nama_diri }}</td>
                </tr>
                 <tr>
                    <td style="width: 30%;">Nama Baptis</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 30%;">{{ $data->nama_baptis }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;">Tempat, Tgl. Lahir</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->tempat_lahir }}, {{ date_format($tanggal_lahir, 'd M Y') }}
                    </td>
                </tr>
                <tr>
                    <td style="width: 30%;">d. Alamat Orang Tua</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->alamat_orangtua }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;"></td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%; height: 30px">Telp/HP : </td>
                </tr>
                <tr>
                    <td style="height: 50px">
                        <strong>Data Orang Tua </strong>
                    </td>
                </tr>
                <tr>
                    <td style="width: 30%; vertical-align: top;">a. Nama Ayah</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->nama_ayah }}</td>
                </tr>
                <tr>
                    <td style="width: 30%; vertical-align: top;">b. Nama Ibu</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->nama_ibu }}</td>
                </tr>
                <tr>
                    <td style="width: 30%; vertical-align: top;">c. Status Perkawinan Orang Tua</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->status_perkawinan_orangtua }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;">Mengikuti Pelajaran Agama Sejak</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->mengikuti_pelajaran_agama_sejak }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;">Mengikuti Perayaan Ekaristi Sejak</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->mengikuti_perayaan_ekaristi_sejak }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;">mwngikuti Kegiatan Lingkungan Sejak</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->mengikuti_kegiatan_lingkungan_sejak }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;">Nama Guru Agama yang Mengajar</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->nama_guru_agama_yang_mengajar }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;">Nama Wali Baptis</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->nama_wali_baptis }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;">Pemberkatan & Pembaptisan</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->pemberkatan_pembaptisan }}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>

@endsection
