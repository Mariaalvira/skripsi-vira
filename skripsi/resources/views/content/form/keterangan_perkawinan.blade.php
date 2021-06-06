@extends('layouts.user')

@section('content')
    <br>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="h1 text-center">
                <p>Form Registrasi Sakramen Perkawinan</p>
            </div>
            <form action="/perkawinan/create" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <fieldset>
                    <legend>Menerangkan Bahwa :</legend>
                    <div class="form-group">
                        <label for="exampleInputNama1">Nama Lengkap</label>
                        <input type="text" class="form-control" id="exampleInputNama1" aria-describedby="namaHelp"
                            placeholder="Masukan nama" name="nama_lengkap_suami">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTtl1">Tempat Tanggal Lahir</label>
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="form-control" id="exampleInputTtl1"
                                    placeholder="Masukan Tempat Lahir" name="tempat_lahir_suami">
                            </div>
                            <div class="col-6">
                                <input type="date" class="form-control" id="exampleInputTtl1"
                                    placeholder="Masukan Tanggal Lahir" name="tanggal_lahir_suami">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTtl1">Tempat Tanggal Baptis</label>

                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="form-control" id="exampleInputTtl1"
                                    placeholder="Masukan Tempat  Baptis" name="tempat_baptis_suami">
                            </div>
                            <div class="col-6">
                                <input type="date" class="form-control" id="exampleInputTtl1"
                                    placeholder="Masukan Tanggal Baptis" name="tanggal_baptis_suami">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPekerjaan1">Pekerjaan</label>
                        <input type="text" class="form-control" id="exampleInputPekerjaan1"
                            placeholder="Masukan Pekerjaan Anda" name="pekerjaan_suami">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNamaAyah1">Nama Ayah</label>
                        <input type="text" class="form-control" id="exampleInputNamaAyah1" placeholder="Masukan Nama Ayah"
                            name="nama_ayah_suami">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNamaIbu1">Nama Ibu</label>
                        <input type="text" class="form-control" id="exampleInputNamaIbu1" placeholder="Masukan Nama Ibu"
                            name="nama_ibu_suami">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputLingkungan1">Lingkungan dan Paroki</label>
                        <input type="text" class="form-control" id="exampleInputLingkungan1"
                            placeholder="Masukan Nama Lingkungan dan Paroki" name="lingkungan_suami">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="exampleInputAlamat1">Alamat</label>
                                <input type="text" class="form-control" id="exampleInputAlamat1"
                                    placeholder="Masukan Alamat" name="alamat_suami">
                            </div>

                            <div class="col-6">
                                <label for="exampleInputAlamat1">No. Telepon</label>
                                <input type="text" class="form-control" id="exampleInputAlamat1"
                                    placeholder="Masukan No. Telepon" name="no_telepon_suami">
                            </div>
                        </div>
                    </div>
                </fieldset>
                <br>
                <fieldset>
                    <legend>Akan Melangsungkan Perkawinan dengan :</legend>
                    <div class="form-group">
                        <label for="exampleInputNama1">Nama Lengkap</label>
                        <input type="text" class="form-control" id="exampleInputNama1" aria-describedby="namaHelp"
                            placeholder="Masukan nama" name="nama_lengkap_istri">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTtl1">Tempat Tanggal Lahir</label>
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="form-control" id="exampleInputTtl1"
                                    placeholder="Masukan Tempat Lahir" name="tempat_lahir_istri">
                            </div>
                            <div class="col-6">
                                <input type="date" class="form-control" id="exampleInputTtl1"
                                    placeholder="Masukan Tanggal Lahir" name="tanggal_lahir_istri">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTtl1">Tempat Tanggal Baptis</label>
                        <div class="row">
                            <div class="col-6">
                                <input type="text" class="form-control" id="exampleInputTtl1"
                                    placeholder="Masukan Tempat  Baptis" name="tempat_baptis_istri">
                            </div>
                            <div class="col-6">
                                <input type="date" class="form-control" id="exampleInputTtl1"
                                    placeholder="Masukan Tanggal Baptis" name="tanggal_baptis_istri">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPekerjaan1">Pekerjaan</label>
                        <input type="text" class="form-control" id="exampleInputPekerjaan1"
                            placeholder="Masukan Pekerjaan Anda" name="pekerjaan_istri">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNamaAyah1">Nama Ayah</label>
                        <input type="text" class="form-control" id="exampleInputNamaAyah1" placeholder="Masukan Nama Ayah"
                            name="nama_ayah_istri">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputNamaIbu1">Nama Ibu</label>
                        <input type="text" class="form-control" id="exampleInputNamaIbu1" placeholder="Masukan Nama Ibu"
                            name="nama_ibu_istri">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputLingkungan1">Lingkungan dan Paroki</label>
                        <input type="text" class="form-control" id="exampleInputLingkungan1"
                            placeholder="Masukan Nama Lingkungan dan Paroki" name="lingkungan_istri">
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <label for="exampleInputAlamat1">Alamat</label>
                                <input type="text" class="form-control" id="exampleInputAlamat1"
                                    placeholder="Masukan Alamat" name="alamat_istri">
                            </div>

                            <div class="col-6">
                                <label for="exampleInputAlamat1">No. Telepon</label>
                                <input type="text" class="form-control" id="exampleInputAlamat1"
                                    placeholder="Masukan No. Telepon" name="no_telepon_istri">
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group">
                    <label for="exampleInputHari1">Perkawinan akan dilangsungkan di Gereja</label>
                    <input type="text" class="form-control" id="exampleInputHari1" placeholder="Masukan nama Gereja"
                        name="gereja_pemberkatan_nikah">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-8">
                            <label for="exampleInputHari1">Pada Hari/Tanggal</label>
                            <input type="date" class="form-control" id="exampleInputHari1"
                                placeholder="Masukan Hari/Tanggal Pelaksanaan" name="tanggal">
                        </div>
                        <div class="col-4">
                            <label for="exampleInputWaktu1">Pukul</label>
                            <input type="time" class="form-control" id="exampleInputWaktu1"
                                placeholder="Masukan Waktu Pelaksanaan" name="pukul">
                        </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="text" class="form-control" id="exampleInputEmail1"
                        placeholder="Masukan Email Anda" name="email">
                </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
@endsection
