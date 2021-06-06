@extends('layouts.user')

@section('content')
    <br>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="h1 text-center">
                <p>Form Registrasi Sakramen Penguatan</p>
            </div>
            <div class="row">
                <div class="col-md-12 mt-3">
                  @if(session('successMsg'))
                    <div class="alert alert-success" role="alert">
                        {{ session('successMsg') }}
                    </div>
                  @endif
                </div>
            </div>
            <form action="/penguatan/create" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputNama1">Nama Diri</label>
                    <input type="text" class="form-control" id="exampleInputNama1" aria-describedby="namaHelp"
                        placeholder="Masukan nama" name="nama_diri">
                </div>
                <div class="form-group">
                    <label for="exampleInputNamaBaptis1">Nama Baptis</label>
                    <input type="text" class="form-control" id="exampleInputNamaBaptis1" placeholder="Masukan Nama Baptis"
                        name="nama_baptis">
                </div>
                <div class="form-group">
                    <label for="exampleInputTtl1">Tempat & Tanggal Lahir</label>
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control" id="exampleInputTtl1" placeholder="Masukan Tempat Lahir"
                                name="tempat_lahir">
                        </div>
                        <div class="col-6">
                            <input type="date" class="form-control" id="exampleInputTtl1"
                                placeholder="Masukan Tanggal Lahir" name="tanggal_lahir">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputTtl1">Tempat & Tanggal Baptis</label>
                    <div class="row">
                        <div class="col-6">
                            <input type="text" class="form-control" id="exampleInputTtl1"
                                placeholder="Masukan Tempat Baptis" name="tempat_baptis">
                        </div>
                        <div class="col-6">
                            <input type="date" class="form-control" id="exampleInputTtl1"
                                placeholder="Masukan Tanggal Baptis" name="tanggal_baptis">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputBuku1">Buku Baptis</label>
                    <input type="text" class="form-control" id="exampleInputBuku1" placeholder="Masukan No Buku Baptis"
                        name="nomor_buku_baptis">
                </div>
                <div class="form-group">
                    <label for="exampleInputNamaAyah1">Nama Ayah</label>
                    <input type="text" class="form-control" id="exampleInputNamaAyah1" placeholder="Masukan Nama Ayah"
                        name="nama_ayah">
                </div>
                <div class="form-group">
                    <label for="exampleInputNamaIbu1">Nama Ibu</label>
                    <input type="text" class="form-control" id="exampleInputNamaIbu1" placeholder="Masukan Nama Ibu"
                        name="nama_ibu">
                </div>
                <div class="form-group">
                    <label for="exampleInputAlamat1">Alamat Calon</label>
                    <input type="text" class="form-control" id="exampleInputAlamat1" placeholder="Masukan Alamat Calon"
                        name="alamat_calon">
                </div>
                <div class="form-group">
                    <label for="exampleInputAlamat1">No. Telepon</label>
                    <input type="text" class="form-control" id="exampleInputAlamat1" placeholder="Masukan No. Telepon"
                        name="no_telepon">
                </div>
                <div class="form-group">
                    <label for="exampleInputLingkungan1">Lingkungan dan Paroki</label>
                    <input type="text" class="form-control" id="exampleInputLingkungan1"
                        placeholder="Masukan Nama Lingkungan dan Paroki" name="paroki_asal">
                </div>
                <div class="form-group">
                    <label for="exampleInputPelindung1">Santo/a Pelindung Penguatan/ Hp</label>
                    <input type="text" class="form-control" id="exampleInputPelindung1"
                        placeholder="Masukan Nama Santo/a Pelindung Penguatan" name="nama_pelindung_penguatan">
                </div>
                <div class="form-group">
                    <label for="exampleInputWali1">Wali Penguatan</label>
                    <input type="text" class="form-control" id="exampleInputWali1" placeholder="Masukan Nama Wali Penguatan"
                        name="nama_wali_penguatan">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                        placeholder="Masukan Email Anda" name="email">
                </div>
                <div class="form-group">
                    <label for="exampleInputNamaPembaptis1">Fc Surat Baptis</label>
                    <input type="file" class="form-control" id="exampleInputPembaptis1"
                        placeholder="Masukan Fc Surat Baptis" name="fc_surat_baptis">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

@endsection
