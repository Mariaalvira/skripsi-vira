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
                <h2 id="judul">Formulir Pendaftaran Sakramen Penguatan</h2>
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
                    <td style="width: 30%;">Tempat</td>
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
                    <td style="width: 30%;">Nomor Buku Baptis</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 30%;">{{ $data->nomor_buku_baptis }}</td>
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
                    <td style="width: 30%;">d. Alamat Calon</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->alamat_calon }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;">Paroki Asal</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->paroki_asal }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;">Nama Pelindung Penguatan</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->nama_pelindung_penguatan }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;">Wali Penguatan</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->nama_wali_penguatan }}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>

@endsection
