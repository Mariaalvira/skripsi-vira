@extends('layouts.admin')

@section('content')
    <br>
    <div class="h1 text-center">
        <p>Edit Data Keterangan Pendaftaran Perkawinan</p>
    </div>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <form action="/admin/update/perkawinan/{{ $datas->id }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <input type="hidden" name="umur" value="anak">

                    <label for="exampleInputNamaSuami1">Nama Lengkap Calon Suami</label>
                    <input type="text" class="form-control" id="exampleInputNamaSuami1" aria-describedby="namaHelp"
                        placeholder="Masukan nama Lengkap Calon Suami" name="nama_lengkap_suami" value="{{ $datas->nama_lengkap_suami }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputTtlSuami1">Tempat Tanggal Lahir Suami</label>
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="exampleInputTtlSuami1" placeholder="Masukan Tempat Lahir Suami"
                                name="tempat_lahir_suami" value="{{ $datas->tempat_lahir_suami }}">
                        </div>
                        <div class="col-lg-6">
                            <input type="date" class="form-control" id="exampleInputTtlSuami1"
                                placeholder="Masukan Tanggal Lahir Suami" name="tanggal_lahir_suami"
                                value="{{ $datas->tanggal_lahir_suami }}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputTtbSuami1">Tempat Tanggal Baptis Suami</label>
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="exampleInputTtbSuami1" placeholder="Masukan Tempat Baptis Suami"
                                name="tempat_baptis_suami" value="{{ $datas->tempat_baptis_suami }}">
                        </div>
                        <div class="col-lg-6">
                            <input type="date" class="form-control" id="exampleInputTtbSuami1"
                                placeholder="Masukan Tanggal Baptis Suami" name="tanggal_baptis_suami"
                                value="{{ $datas->tanggal_baptis_suami }}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPekerjaanSuami1">Pekerjaan Suami</label>
                    <input type="text" class="form-control" id="exampleInputPekerjaanSuami1" placeholder="Masukan Pekerjaan Suami"
                        name="pekerjaan_suami" value="{{ $datas->pekerjaan_suami }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputNamaAyahSuami1">Nama Ayah</label>
                    <input type="text" class="form-control" id="exampleInputNamaAyahSuami1" placeholder="Masukan Nama Ayah"
                        name="nama_ayah" value="{{ $datas->nama_ayah }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputNamaIbuSuami1">Nama Ibu</label>
                    <input type="text" class="form-control" id="exampleInputNamaIbuSuami1" placeholder="Masukan Nama Ibu"
                        name="nama_ibu" value="{{ $datas->nama_ibu }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputLingkunganParokiSuami1">Lingkungan Paroki Suami</label>
                    <input type="text" class="form-control" id="exampleInputLingkunganParokiSuami1" placeholder="Masukan Lingkungan Paroki Suami"
                        name="lingkungan_paroki_suami" value="{{ $datas->lingkungan_paroki_suami }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputAlamatSuami1">Alamat Suami</label>
                    <input type="text" class="form-control" id="exampleInputAlamatSuami1"
                        placeholder="Masukan Alamat Suami" name="alamat_suami"
                        value="{{ $datas->alamat_suami }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputNoTeleponSuami1">Nomor Telepon</label>
                    <input type="text" class="form-control" id="exampleInputNomorTeleponSuami1"
                        placeholder="Masukan Nomor Telepon Suami" name="nomor_telepon"
                        value="{{ $datas->nomor_telepon }}">
                </div>
                <div class="form-group">
                    <input type="hidden" name="umur" value="anak">

                    <label for="exampleInputNamaIstri1">Nama Lengkap Calon Istri</label>
                    <input type="text" class="form-control" id="exampleInputNamaIstri1" aria-describedby="namaHelp"
                        placeholder="Masukan nama Lengkap Calon Istri" name="nama_lengkap_istri" value="{{ $datas->nama_lengkap_istri }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputTtlIstri1">Tempat Tanggal Lahir Istri</label>
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="exampleInputTtlIstri1" placeholder="Masukan Tempat Lahir Istri"
                                name="tempat_lahir_istri" value="{{ $datas->tempat_lahir_istri }}">
                        </div>
                        <div class="col-lg-6">
                            <input type="date" class="form-control" id="exampleInputTtlIstri1"
                                placeholder="Masukan Tanggal Lahir Istri" name="tanggal_lahir_istri"
                                value="{{ $datas->tanggal_lahir_istri }}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputTtbIstriS1">Tempat Tanggal Baptis Istri</label>
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" class="form-control" id="exampleInputTtbIstri1" placeholder="Masukan Tempat Baptis Istri"
                                name="tempat_baptis_istri" value="{{ $datas->tempat_baptis_istri }}">
                        </div>
                        <div class="col-lg-6">
                            <input type="date" class="form-control" id="exampleInputTtbIstri1"
                                placeholder="Masukan Tanggal Baptis Istri" name="tanggal_baptis_istri"
                                value="{{ $datas->tanggal_baptis_istri }}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPekerjaanIstri1">Pekerjaan Istri</label>
                    <input type="text" class="form-control" id="exampleInputPekerjaanIstri1" placeholder="Masukan Pekerjaan Istri"
                        name="pekerjaan_istri" value="{{ $datas->pekerjaan_istri }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputNamaAyahIstri1">Nama Ayah</label>
                    <input type="text" class="form-control" id="exampleInputNamaAyahIstri1" placeholder="Masukan Nama Ayah"
                        name="nama_ayah" value="{{ $datas->nama_ayah }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputNamaIbuIstri1">Nama Ibu</label>
                    <input type="text" class="form-control" id="exampleInputNamaIbuIstri1" placeholder="Masukan Nama Ibu"
                        name="nama_ibu" value="{{ $datas->nama_ibu }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputLingkunganParokiIstri1">Lingkungan Paroki Isteri</label>
                    <input type="text" class="form-control" id="exampleInputLingkunganParokiIstri1" placeholder="Masukan Lingkungan Paroki Isteri"
                        name="lingkungan_paroki_istri" value="{{ $datas->lingkungan_paroki_istri }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputAlamatIstri1">Alamat Isteri</label>
                    <input type="text" class="form-control" id="exampleInputAlamatIstri1"
                        placeholder="Masukan Alamat Isteri" name="alamat_istri"
                        value="{{ $datas->alamat_istri }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputNoTeleponIstri1">Nomor Telepon</label>
                    <input type="text" class="form-control" id="exampleInputNomorTeleponIstri1"
                        placeholder="Masukan Nomor Telepon Isteri" name="nomor_telepon"
                        value="{{ $datas->nomor_telepon }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputGereja1">Gereja Pemberkatan Nikah</label>
                    <input type="text" class="form-control" id="exampleInputGereja1" placeholder="Masukan Gereja Pemberkatan Nikah"
                        name="gereja_pemberkatan_nikah" value="{{ $datas->gereja_pemberkatan_nikah }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputTanggalPelaksanaan1">Tanggal Pelaksanaan</label>
                    <input type="text" class="form-control" id="exampleInputTanggalPelaksanaan1" placeholder="Masukan Tanggal Pelaksanaan"
                        name="tanggal_pelaksanaan" value="{{ $datas->tanggal_pelaksanaan }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputWaktu1">Pukul</label>
                    <input type="text" class="form-control" id="exampleInputWaktu1" placeholder="Masukan Waktu Pelaksanaan"
                        name="waktu_pelaksanaan" value="{{ $datas->waktu_pelaksanaan }}">
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

