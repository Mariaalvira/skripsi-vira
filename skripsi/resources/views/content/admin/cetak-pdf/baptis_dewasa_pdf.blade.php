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
    <title>Sakramen Baptis Dewasa</title>
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
            <h2 id="judul">Formulir Pendaftaran Baptis Dewasa</h2>
        </u>

        <p>Lingkungan : </p>

        <table>
            <tr>
                <td style="width: 30%;">Nama Diri</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->nama_diri }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Nama Baptis</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->nama_baptis }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Tempat, Tgl. Lahir</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->tempat_lahir }}, {{ date_format($tanggal_lahir, 'd M Y') }}
                </td>
            </tr>
            <tr>
                <td style="width: 30%;">Alamat</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->alamat }}</td>
            </tr>
            <tr>
                <td style="width: 30%;"></td>
                <td style="width: 5%;"></td>
                <td style="width: 65%; height: 30px">Telp/HP : </td>
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
                <td style="width: 30%; vertical-align: top;">c. Status Perkawinan Calon Baptis</td>
                <td style="width: 5%; vertical-align: top;">:</td>
                <td style="width: 65%;">{{ $data->status_perkawinan_calon_baptis }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Mengikuti Pelajaran Agama sejak</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->mengikuti_pelajaran_agama_sejak }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Mengikuti Perayaan Ekaristi sejak</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->mengikuti_perayaan_ekaristi_sejak }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Mengikuti Kegiatan Lingkungan sejak</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->mengikuti_kegiatan_lingkungan_sejak }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Nama Guru Agama yang mengajar</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->nama_guru_agama_yang_mengajar }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Nama Walibaptis</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->nama_walibaptis }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Pemberkatan & Pembaptisan</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->pemberkatan_dan_pembaptisan }}</td>
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
                <td style="width: 30%; border-top: 1px solid; text-align: center">Guru Agama</td>
                <td style="width: 5%;"></td>
                <td style="width: 30%; border-top: 1px solid; text-align: center">Orangtua/Wali</td>
                <td style="width: 5%;"></td>
                <td style="width: 30%; border-top: 1px solid; text-align: center">Calon</td>
            </tr>
        </table>
    </div>
</body>

</html>
