<!DOCTYPE html>
<html lang="en">
@php
$tanggal_lahir = date_create($data->tanggal_lahir);
$hari_ini = date_create(date('Y-m-d'));
@endphp

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sakramen Baptis Anak</title>
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
            <h2 id="judul">Formulir Pendaftaran Baptis Anak</h2>
        </u>

        <p>Lingkungan : </p>

        <table>
            <tr>
                <td style="width: 30%;">Nama Diri</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->nama_diri }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Tempat, Tgl. Lahir</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->tempat_lahir }}, {{ date_format($tanggal_lahir, 'd M Y') }}
                </td>
            </tr>
            <tr>
                <td style="height: 30px">Data Orang Tua (<i>Mohon Dicek Kembali</i>)</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">a. Nama Ayah</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{ $data->nama_ayah }}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">b. Nama Ibu</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{ $data->nama_ibu }}</td>
            </tr>
            <tr>
                <td style="width: 30%; vertical-align: top;">c. Status Perkawinan Orang Tua</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{ $data->status_perkawinan_orangtua }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">d. Alamat Orang Tua</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->alamat_orangtua }}</td>
            </tr>
            <tr>
                <td style="width: 30%;"></td>
                <td style="width: 5%;"></td>
                <td style="width: 65%; height: 30px">Telp/HP : </td>
            </tr>
            <tr>
                <td style="width: 30%;">Nama Wali Baptis</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->nama_wali_baptis }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Tempat Baptis</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->tempat_baptis }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Dibaptis Oleh</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->dibaptis_oleh }}</td>
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
                <td style="width: 30%; border-top: 1px solid; text-align: center">Pastor Paroki Domisili</td>
                <td style="width: 5%;"></td>
                <td style="width: 30%; border-top: 1px solid; text-align: center">Ketua Lingkungan</td>
                <td style="width: 5%;"></td>
                <td style="width: 30%; border-top: 1px solid; text-align: center">Pemohon</td>
            </tr>
        </table>
    </div>
</body>

</html>
