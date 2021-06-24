@extends('layouts.admin')

@section('content')

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <u>
                <h2 id="judul">Surat Keterangan Pendaftaran Perkawinan</h2>
            </u>
            <br><br>
            <table style="font-size: 20px; height: 200px">
                <tr>
                    <td style="height: 50px">
                        <strong>Menerangkan bahwa </strong>
                    </td>
                </tr>
                <tr>
                    <td style="width: 30%;">Nama Lengkap</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 30%;">{{ $data->nama_lengkap_suami }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;">Tempat, Tgl. Lahir</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->tempat_lahir_suami }}, {{ date_format($tanggal_lahir_suami, 'd M Y') }}
                    </td>
                </tr>
                <tr>
                    <td style="width: 30%;">Tempat, Tgl. Baptis</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->tempat_baptis_suami }}, {{ date_format($tanggal_baptis_suami, 'd M Y') }}
                    </td>
                </tr>
                <tr>
                    <td style="width: 30%;">Pekerjaan</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 30%;">{{ $data->pekerjaan_suami }}</td>
                </tr>
                <tr>
                    <td style="width: 30%; vertical-align: top;">a. Nama Ayah</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->nama_ayah_suami }}</td>
                </tr>
                <tr>
                    <td style="width: 30%; vertical-align: top;">b. Nama Ibu</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->nama_ibu_suami }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;">Lingkungan</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->lingkungan_suami }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;">d. Alamat</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->alamat_suami }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;"></td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%; height: 30px">Telp/HP : </td>
                </tr>
                <tr>
                    <td style="height: 50px">
                        <strong>Akan melangsungkan perkawinan dengan </strong>
                    </td>
                </tr>
                <tr>
                    <td style="width: 30%;">Nama Lengkap</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 30%;">{{ $data->nama_lengkap_istri }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;">Tempat, Tgl. Lahir</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->tempat_lahir_istri }}, {{ date_format($tanggal_lahir_istri, 'd M Y') }}
                    </td>
                </tr>
                <tr>
                    <td style="width: 30%;">Tempat, Tgl. Baptis</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->tempat_baptis_istri }}, {{ date_format($tanggal_baptis_istri, 'd M Y') }}
                    </td>
                </tr>
                <tr>
                    <td style="width: 30%;">Pekerjaan</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 30%;">{{ $data->pekerjaan_istri }}</td>
                </tr>
                <tr>
                    <td style="width: 30%; vertical-align: top;">a. Nama Ayah</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->nama_ayah_istri }}</td>
                </tr>
                <tr>
                    <td style="width: 30%; vertical-align: top;">b. Nama Ibu</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->nama_ibu_istri }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;">Lingkungan</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->lingkungan_istri }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;">d. Alamat</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->alamat_istri }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;"></td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%; height: 30px">Telp/HP : </td>
                </tr>
                <tr>
                    <td style="width: 30%;">Perkawinan akan dilangsungkan di Gereja</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->gereja_pemberkatan_nikah }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;">Pada Hari/ Tanggal</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->tanggal }}</td>
                </tr>
                <tr>
                    <td style="width: 30%;">Pukul</td>
                    <td style="width: 30%; text-align: center">:</td>
                    <td style="width: 65%;">{{ $data->pukul }}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>

@endsection
