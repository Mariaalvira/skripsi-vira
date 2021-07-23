<!DOCTYPE html>
<html lang="en">
@php
$tanggal_lahir = date_create($data->tanggal_lahir);
$tanggal_baptis = date_create($data->tanggal_baptis);
$hari_ini = date_create(date('Y-m-d'));
@endphp

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sakramen Penguatan</title>
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
        <h3 id="judul">PAROKI SANTO MIKAEL PANGKALAN ADISUTJIPTO</h3>
        <p>JL.Lettu TPT Sapardal No.1, Lanud Adisutjipto, Yogyakarta 55281
            Tlp.(0274) 2803760, 488466 ext. 5154; E-mail: paroki_stmikael@yahoo.com
        </p>
        <hr>
        <u>
            <h2 id="judul">Formulir Pendaftaran Sakramen Penguatan</h2>
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
                <td style="width: 30%;">Tempat Baptis</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->tempat_baptis }}, {{ date_format($tanggal_baptis, 'd M Y') }}
                </td>
            </tr>
            <tr>
                <td style="width: 30%;">Nomor Buku Baptis</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->nomor_buku_baptis }}</td>
            </tr>
            <tr>
                <td style="height: 30px">Data Orang Tua (<i>Mohon Ditulis Lengkap</i>)</td>
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
                <td style="width: 30%;">d. Alamat Calon</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->alamat_calon }}</td>
            </tr>
            <tr>
                <td style="width: 30%;"></td>
                <td style="width: 5%;"></td>
                <td style="width: 65%; height: 30px">Telp/HP : {{ $data->no_telepon }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Paroki Asal</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->paroki_asal }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Santo/a Pelindung Penguatan</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->nama_pelindung_penguatan }}</td>
            </tr>
            <tr>
                <td style="width: 30%;">Wali Penguatan</td>
                <td style="width: 5%;">:</td>
                <td style="width: 65%;">{{ $data->nama_wali_penguatan }}</td>
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
                <td style="width: 30%; border-top: 1px solid; text-align: center">Orangtua</td>
                <td style="width: 5%;"></td>
                <td style="width: 30%; border-top: 1px solid; text-align: center">Calon</td>
            </tr>
        </table>
        <br><br><br>
        <h3>Syarat-Syarat :</h3>
        <table>
            <tr>
                @if ($data->fc_surat_baptis != null)
                    <td>Fotocopy Surat Baptis (<b>ada</b>)</td>
                @endif
            </tr>
        </table>
    </div>
</body>

</html>
