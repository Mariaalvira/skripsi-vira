@extends('layouts.admin')

@section('content')
    @php
    $tanggal_lahir = date_create($data->tanggal_lahir);
    $tanggal_baptis = date_create($data->tanggal_baptis);
    $hari_ini = date_create(date('Y-m-d'));
    @endphp
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <u>
                <h2 id="judul">Formulir Pendaftaran Komuni Pertama</h2>
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
                    <td style="width: 30%;">Tempat, Tgl. Baptis</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->tempat_baptis }}, {{ date_format($tanggal_baptis, 'd M Y') }}
                    </td>
                </tr>
                <tr>
                    <td style="width: 30%;">Buku Baptis</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 30%;">{{ $data->buku_baptis }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;">Nama Sekolah</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 30%;">{{ $data->nama_sekolah }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;">Kelas</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 30%;">{{ $data->kelas }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;">Lingkungan & Paroki</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 30%;">{{ $data->lingkungan_paroki }}</td>
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
                    <td style="width: 30%;">d. Alamat Orang Tua</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->alamat_orangtua }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;"></td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%; height: 30px">Telp/HP : {{ $data->no_telepon }}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>

@endsection
