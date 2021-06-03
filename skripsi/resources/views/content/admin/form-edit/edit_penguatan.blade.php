@extends('layouts.admin')

@section('content')
    <br>
    <div class="h1 text-center">
        <p>Edit Data Sakramen Penguatan</p>
    </div>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <form action="/admin/update/penguatan/{{ $datas->id }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="hidden" name="umur" value="anak">

                    <label for="exampleInputNama1">Nama Diri</label>
                    <input type="text" class="form-control" id="exampleInputNama1" aria-describedby="namaHelp"
                        placeholder="Masukan nama" name="nama_diri" value="{{ $datas->nama_diri }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputNamaBaptis1">Nama Baptis</label>
                    <input type="text" class="form-control" id="exampleInputNamaBaptis1" placeholder="Masukan Nama Baptis"
                        name="nama_baptis" value="{{ $datas->nama_baptis }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputTtl1">Tempat Tanggal Lahir</label>
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="exampleInputTtl1" placeholder="Masukan Tempat Lahir"
                                name="tempat_lahir" value="{{ $datas->tempat_lahir }}">
                        </div>
                        <div class="col-lg-6">
                            <input type="date" class="form-control" id="exampleInputTtl1"
                                placeholder="Masukan Tanggal Lahir" name="tanggal_lahir"
                                value="{{ $datas->tanggal_lahir }}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputTtb1">Tempat Tanggal Baptis</label>
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="exampleInputTtb1" placeholder="Masukan Tempat Baptis"
                                name="tempat_baptis" value="{{ $datas->tempat_baptis }}">
                        </div>
                        <div class="col-lg-6">
                            <input type="date" class="form-control" id="exampleInputTtb1"
                                placeholder="Masukan Tanggal Baptis" name="tanggal_baptis"
                                value="{{ $datas->tanggal_baptis }}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputNoBukuBaptis1">Nomor Buku Baptis</label>
                    <input type="text" class="form-control" id="exampleInputNoBukuBaptis1" placeholder="Masukan Halaman dan No Buku Baptis"
                        name="nomor_buku_baptis" value="{{ $datas->nomor_buku_baptis }}">
                </div>
                
                <div class="form-group">
                    <label for="exampleInputNamaAyah1">Nama Ayah</label>
                    <input type="text" class="form-control" id="exampleInputNamaAyah1" placeholder="Masukan Nama Ayah"
                        name="nama_ayah" value="{{ $datas->nama_ayah }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputNamaIbu1">Nama Ibu</label>
                    <input type="text" class="form-control" id="exampleInputNamaIbu1" placeholder="Masukan Nama Ibu"
                        name="nama_ibu" value="{{ $datas->nama_ibu }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputAlamat1">Alamat Calon</label>
                    <input type="text" class="form-control" id="exampleInputAlamat1"
                        placeholder="Masukan Alamat Calon" name="alamat_calon"
                        value="{{ $datas->alamat_calon }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputNoTelepon1">Nomor Telepon</label>
                    <input type="text" class="form-control" id="exampleInputNomorTelepon1"
                        placeholder="Masukan Nomor Telepon" name="nomor_telepon"
                        value="{{ $datas->nomor_telepon }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputParokiAsal1">Paroki Asal</label>
                    <input type="text" class="form-control" id="exampleInputParokiAsal1" placeholder="Masukan Paroki Asal"
                        name="paroki_asal" value="{{ $datas->paroki_asal }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputNamaPelindung1">Nama Pelindung Penguatan</label>
                    <input type="text" class="form-control" id="exampleInputNamaPelindung1" placeholder="Masukan Nama Pelindung Penguatan"
                        name="nama_pelindung_penguatan" value="{{ $datas->nama_pelindung_penguatan }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputNamaWaliPenguatan1">Nama Wali Penguatan</label>
                    <input type="text" class="form-control" id="exampleInputNamaWaliPenguatan1" placeholder="Masukan Nama Wali Penguatan"
                        name="nama_wali_penguatan" value="{{ $datas->nama_wali_penguatan }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputTanggalPelaksanaan1">Tanggal Pelaksanaan</label>
                    <input type="text" class="form-control" id="exampleInputTanggalPelaksanaan1" placeholder="Masukan Tanggal Pelaksanaan"
                        name="tanggal_pelaksanaan" value="{{ $datas->tanggal_pelaksanaan }}">
                </div>
                <div class="form-group">
                    <strong>
                        <p>Lampiran Berkas Umat :</p>
                    </strong>

                    @if ($datas->fc_surat_baptis)
                        <p>FC Surat Baptis : <span class="glyphicon glyphicon-ok text-success"></span>
                        </p>
                    @endif

                </div>
                <button type="submit" class="btn btn-primary">Submit</button>

            </form>
        </div>
        <div class="col-lg-2"></div>
    </div>



@endsection

