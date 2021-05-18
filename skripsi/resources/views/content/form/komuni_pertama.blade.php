@extends('layouts.user')

@section('content')
<br>
<div class="row">
    <div class="col-2"></div>
    <div class="col-8">
        <form action="/komuni-pertama/create" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputNama1">Nama Diri</label>
                <input type="text" class="form-control" id="exampleInputNama1" aria-describedby="namaHelp" placeholder="Masukan nama" name="nama_diri">
            </div>
            <div class="form-group">
                <label for="exampleInputNamaBaptis1">Nama Baptis</label>
                <input type="text" class="form-control" id="exampleInputNamaBaptis1" placeholder="Masukan Nama Baptis" name="nama_baptis">
            </div>
        <div class="form-group">
                        <label for="exampleInputTtl1">Tempat Tanggal Lahir</label>
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
            <label for="exampleInputTtl1">Tempat</label>
            <input type="text" class="form-control" id="exampleInputTtl1" placeholder="Masukan Tempat " name="tempat_baptis">
        </div>
        <div class="form-group">
            <label for="exampleInputTtl1">Tanggal Baptis</label>T
            <input type="date" class="form-control" id="exampleInputTtl1" placeholder="Masukan Tanggal Lahir" name="tanggal_baptis">
        </div>
        <div class="form-group">
            <label for="exampleInputBuku1">Buku Baptis</label>
            <input type="text" class="form-control" id="exampleInputBuku1" placeholder="Masukan  Hal dan No Buku Baptis" name="buku_baptis">
        </div>
        <div class="form-group">
            <label for="exampleInputSekolah1">Nama Sekolah</label>
            <input type="text" class="form-control" id="exampleInputSekolah1" placeholder="Masukan Nama Sekolah dan Kelas" name="nama_sekolah">
        </div>
        <div class="form-group">
            <label for="exampleInputKelas1">Kelas</label>
            <input type="text" class="form-control" id="exampleInputKelas1" placeholder="Masukan Kelas" name="kelas">
        </div>
        <div class="form-group">
            <label for="exampleInputLingkungan1">Lingkungan dan Paroki</label>
            <input type="text" class="form-control" id="exampleInputLingkungan1" placeholder="Masukan Nama Lingkungan dan Paroki" name="lingkungan_paroki">
        </div>
        <div class="form-group">
            <label for="exampleInputNamaAyah1">Nama Ayah</label>
            <input type="text" class="form-control" id="exampleInputNamaAyah1" placeholder="Masukan Nama Ayah" name="nama_ayah">
        </div>
        <div class="form-group">
            <label for="exampleInputNamaIbu1">Nama Ibu</label>
            <input type="text" class="form-control" id="exampleInputNamaIbu1" placeholder="Masukan Nama Ibu" name="nama_ibu">
        </div>
        <div class="form-group">
            <label for="exampleInputAlamat1">Alamat Orang Tua</label>
            <input type="text" class="form-control" id="exampleInputAlamat1" placeholder="Masukan Alamat Orangtua" name="alamat_orangtua">
        </div>
        <div class="form-group">
            <label for="exampleInputTelp1">Nomor Telepon/ Hp</label>
            <input type="text" class="form-control" id="exampleInputTelp1" placeholder="Masukan Nomor TeLepon/ Hp" name="no_telepon">
        </div>
        <div class="form-group">
            <label for="exampleInputNamaPembaptis1">Fc Surat Baptis</label>
            <input type="file" class="form-control" id="exampleInputPembaptis1" placeholder="Masukan Fc Surat Baptis" name="fc_surat_baptis">
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection
