<!DOCTYPE html>
<html lang="en">
@php
$tanggal_lahir = date_create($data->tanggal_lahir);
$tanggal_lahir_suami = date_create($data->tanggal_lahir_suami);
$tanggal_baptis_suami = date_create($data->tanggal_baptis_suami);
$tanggal_lahir_istri = date_create($data->tanggal_lahir_istri);
$tanggal_baptis_istri = date_create($data->tanggal_baptis_istri);
$tanggal = date_create($data->tanggal);
$hari_ini = date_create(date('Y-m-d'));
@endphp

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sakramen Perkawinan</title>
    <style>
        #judul {
            text-align: center;
        }

        #halaman {
            width: auto;
            height: auto;
            position: absolute;
            padding-top: 50px;
            padding-left: 30px;
            padding-right: 30px;
            padding-bottom: 80px;
        }

    </style>
</head>

<body>
    <div id=halaman>
        <h3 id="judul">Logo</h3>
        <hr>
        <u>
            <h2 id="judul">Formulir Keterangan Pendaftaran Perkawinan</h2>
        </u>

        <p>Lingkungan : </p>

        <table>
            <tr>
                <td style="height: 30px"><b>Menerangkan bahwa :</b></td>
            </tr>
            <tr>
                <td style="width: 30%;">Nama Lengkap</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->nama_lengkap_suami }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Tempat, Tgl. Lahir</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->tempat_lahir_suami }},
                    {{ date_format($tanggal_lahir_suami, 'd M Y') }}
                </td>
            </tr>
            <tr>
                <td style="width: 30%;">Tempat, Tgl. Baptis</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->tempat_baptis_suami }},
                    {{ date_format($tanggal_baptis_suami, 'd M Y') }}
                </td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">Pekerjaan</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{ $data->pekerjaan_suami }}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">Nama Ayah</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{ $data->nama_ayah_suami }}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">Nama Ibu</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{ $data->nama_ibu_suami }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Alamat</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->alamat_suami }}</td>
            </tr>
            <tr>
                <td style="width: 30%;"></td>
                <td style="width: 5%;"></td>
                <td style="width: 65%; height: 30px">Telp/HP : {{ $data->no_telepon_suami }}</td>
            </tr>
            <tr>
                <td style="height: 30px"><b>Akan melangsungkan perkawinan dengan :</b></td>
            </tr>
            <tr>
                <td style="width: 30%;">Nama Lengkap</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->nama_lengkap_istri }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Tempat, Tgl. Lahir</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->tempat_lahir_istri }},
                    {{ date_format($tanggal_lahir_istri, 'd M Y') }}
                </td>
            </tr>
            <tr>
                <td style="width: 30%;">Tempat, Tgl. Baptis</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->tempat_baptis_istri }},
                    {{ date_format($tanggal_baptis_istri, 'd M Y') }}
                </td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">Pekerjaan</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{ $data->pekerjaan_istri }}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">Nama Ayah</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{ $data->nama_ayah_istri }}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">Nama Ibu</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{ $data->nama_ibu_istri }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Alamat</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->alamat_istri }}</td>
            </tr>
            <tr>
                <td style="width: 30%;"></td>
                <td style="width: 5%;"></td>
                <td style="width: 65%; height: 30px">Telp/HP : {{ $data->no_telepon_istri }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Perkawinan akan dilangsungkan di Gereja</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->gereja_pemberkatan_nikah }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Pada Hari/ Tanggal</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ date_format($tanggal, 'd M Y') }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Pukul</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->pukul }}</td>
            </tr>
        </table>

        <br><br>
        <div style="width: 30%; text-align: left; float: right;">Yogyakarta,
            {{ date_format($hari_ini, 'd M Y') }}
        </div><br>
        <div style="width: 30%; text-align: left; float: right;">Hormat Kami,</div>
        <br><br><br><br><br>
        <table style="width: 100%" align="justify">
            <tr>
                <td style="width: 30%;"></td>
                <td style="width: 5%;"></td>
                <td style="width: 30%;"></td>
                <td style="width: 5%;"></td>
                <td style="width: 30%;"></td>
            </tr>
            <tr>
                <td style="width: 30%; border-top: 1px solid; text-align: center">Ketua Lingkungan</td>
                <td style="width: 5%;"></td>
                <td style="width: 5%;"></td>
                <td style="width: 5%;"></td>
                <td style="width: 30%; border-top: 1px solid; text-align: center">Ketua Lingkungan</td>
            </tr>
        </table>
    </div>
</body>

</html>
