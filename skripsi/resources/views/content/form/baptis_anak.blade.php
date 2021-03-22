@extends('layouts.user')

@section('content')
    <br>
    <div class="h1 text-center">
        <p>Form Registrasi Sakramen Baptis Anak</p>
    </div>
    <div class="row">
        <div class="col-2"></div>
        <div class="col-8">
            <form action="/sakramen/baptis_anak" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="hidden" name="umur" value="anak">

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
                    <label for="exampleInputNamaAyah1">Nama Ayah</label>
                    <input type="text" class="form-control" id="exampleInputNamaAyah1" placeholder="Masukan Nama Ayah"
                        name="nama_ayah">
                </div>
                <div class="form-group">
                    <label for="exampleInputNamaIbu1">Nama Ibu</label>
                    <input type="text" class="form-control" id="exampleInputNamaIbu1" placeholder="Masukan Nama Ibu"
                        name="nama_ibu">
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">Status Perkawinan Orangtua</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_perkawinan_orangtua"
                                    id="gridRadios1" value="gereja" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Gereja
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_perkawinan_orangtua"
                                    id="gridRadios2" value="kua">
                                <label class="form-check-label" for="gridRadios2">
                                    KUA
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_perkawinan_orangtua"
                                    id="gridRadios3" value="catatan sipil">
                                <label class="form-check-label" for="gridRadios3">
                                    Catatan Sipil
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_perkawinan_orangtua"
                                    id="gridRadios3" value="cara lain">
                                <label class="form-check-label" for="gridRadios3">
                                    Cara Lain
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <div class="form-group">
                    <label for="exampleInputAlamat1">Alamat Orang Tua</label>
                    <input type="text" class="form-control" id="exampleInputAlamat1"
                        placeholder="Masukan Alamat Orangtua dan No.Telp" name="alamat_orangtua">
                </div>
                <div class="form-group">
                    <label for="exampleInputNamaWali1">Nama Wali Baptis</label>
                    <input type="text" class="form-control" id="exampleInputNamaWali1"
                        placeholder="Masukan Nama Wali Baptis" name="nama_wali_baptis">
                </div>
                <div class="form-group">
                    <label for="exampleInputTempat1">Tempat Baptis</label>
                    <input type="text" class="form-control" id="exampleInputTempat1" placeholder="Masukan Tempat Baptis"
                        name="tempat_baptis">
                </div>
                <div class="form-group">
                    <label for="exampleInputTanggal1">Tanggal Baptis</label>
                    <input type="date" class="form-control" id="exampleInputTanggal1" placeholder="Masukan Tanggal Baptis"
                        name="tanggal_baptis">
                </div>
                <div class="form-group">
                    <label for="exampleInputNamaPembaptis1">Dibaptis Oleh</label>
                    <input type="text" class="form-control" id="exampleInputPembaptis1"
                        placeholder="Masukan Nama Yang Membaptis" name="dibaptis_oleh">
                </div>
                <!--  <div class="custom-file">
                                                                                                                        <input type="text" class="custom-file-input" id="validatedCustomFile" required name="fc_surat_nikah_orangtua">
                                                                                                                        <small id="emailHelp" class="form-text text-muted">Masukan file Fotocopy Surat Pernikahan Orang Tua.</small>
                                                                                                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                                                                                                          <div class="invalid-feedback">Example invalid custom file feedback</div>
                                                                                                                      </div>
                                                                                                                      <div class="custom-file">
                                                                                                                        <input type="text" class="custom-file-input" id="validatedCustomFile" required name="fc_surat_nikah_sipil_orangtua">
                                                                                                                        <small id="emailHelp" class="form-text text-muted">Masukan file Fotocopy Surat Nikah Sipil Orang Tua (bagi yang menikah di luar gereja).</small>
                                                                                                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                                                                                                          <div class="invalid-feedback">Example invalid custom file feedback</div>
                                                                                                                      </div>
                                                                                                                      <div class="custom-file">
                                                                                                                        <input type="text" class="custom-file-input" id="validatedCustomFile" required name="fc_akte_kelahiran">
                                                                                                                        <small id="emailHelp" class="form-text text-muted">Masukan file Fotocopy Akte Kelahiran atau Keterangan Lahir.</small>
                                                                                                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                                                                                                          <div class="invalid-feedback">Example invalid custom file feedback</div>
                                                                                                                      </div>
                                                                                                                      <div class="custom-file">
                                                                                                                        <input type="text" class="custom-file-input" id="validatedCustomFile" required name="surat_nikah_gereja_wali_baptis">
                                                                                                                        <small id="emailHelp" class="form-text text-muted">Masukan file Fotocopy Surat Nikah Gereja Katolik atau Surat Baptis dari Wali Baptis.</small>
                                                                                                                        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                                                                                                                          <div class="invalid-feedback">Example invalid custom file feedback</div>
                                                                                                                      </div> -->
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-2"></div>
    </div>



@endsection
