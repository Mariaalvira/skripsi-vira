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
                <h2 id="judul">Formulir Pendaftaran Baptis Anak</h2>
            </u>
            <br><br>
            <table style="font-size: 20px; height: 200px">
                <tr>
                    <td style="width: 30%;">Nama Diri</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 30%;">{{ $data->nama_diri }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;">Tempat, Tgl. Lahir</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->tempat_lahir }}, {{ date_format($tanggal_lahir, 'd M Y') }}
                    </td>
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
                    <td style="width: 30%;">Nama Wali Baptis</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->nama_wali_baptis }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;">Tempat Baptis</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->tempat_baptis }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;">Dibaptis Oleh</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->dibaptis_oleh }}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>

@endsection
