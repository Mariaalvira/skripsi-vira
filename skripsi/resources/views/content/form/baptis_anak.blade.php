@extends('layouts.user')

@section('content')
	<form>
  		<div class="form-group">
  			<label for="exampleInputNama1">Nama Diri</label>
    		<input type="text" class="form-control" id="exampleInputNama1" aria-describedby="namaHelp" placeholder="Masukan nama">
  		</div>
  		<div class="form-group">
    		<label for="exampleInputNamaBaptis1">Nama Baptis</label>
    		<input type="text" class="form-control" id="exampleInputNamaBaptis1" placeholder="Masukan Nama Baptis">
  		</div>
      <div class="form-group">
        <label for="exampleInputTtl1">Tempat Tanggal Lahir</label>
        <input type="text" class="form-control" id="exampleInputTtl1" placeholder="Masukan Tempat Tanggal Lahir">
      </div>
      <div class="form-group">
        <label for="exampleInputNamaAyah1">Nama Ayah</label>
        <input type="text" class="form-control" id="exampleInputNamaAyah1" placeholder="Masukan Nama Ayah">
      </div>
      <div class="form-group">
        <label for="exampleInputNamaIbu1">Nama Ibu</label>
        <input type="text" class="form-control" id="exampleInputNamaIbu1" placeholder="Masukan Nama Ibu">
      </div>
      <fieldset class="form-group">
        <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">Status Perkawinan Orangtua</legend>
       <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
            <label class="form-check-label" for="gridRadios1">
            Gereja
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
            <label class="form-check-label" for="gridRadios2">
            KUA
            </label>
          </div>
          <div class="form-check disabled">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
            <label class="form-check-label" for="gridRadios3">
            Catatan Sipil
            </label>
          </div>
          <div class="form-check disabled">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
            <label class="form-check-label" for="gridRadios3">
            Cara Lain
            </label>
          </div>
        </div>
      </div>
    </fieldset>
    <div class="form-group">
        <label for="exampleInputAlamat1">Alamat Orang Tua</label>
        <input type="text" class="form-control" id="exampleInputAlamat1" placeholder="Masukan Alamat Orangtua dan No.Telp">
      </div>
      <div class="form-group">
        <label for="exampleInputNamaWali1">Nama Wali Baptis</label>
        <input type="text" class="form-control" id="exampleInputNamaWali1" placeholder="Masukan Nama Wali Baptis">
      </div>
      <div class="form-group">
        <label for="exampleInputTempat1">Tempat Baptis</label>
        <input type="text" class="form-control" id="exampleInputTempat1" placeholder="Masukan Tempat Baptis">
      </div>
      <div class="form-group">
        <label for="exampleInputTanggal1">Tanggal Baptis</label>
        <input type="text" class="form-control" id="exampleInputTanggal1" placeholder="Masukan Tanggal Baptis">
      </div>
      <div class="form-group">
        <label for="exampleInputNamaPembaptis1">Dibaptis Oleh</label>
        <input type="text" class="form-control" id="exampleInputPembaptis1" placeholder="Masukan Nama Yang Membaptis">
      </div>
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
        <small id="emailHelp" class="form-text text-muted">Masukan file Fotocopy Surat Pernikahan Orang Tua.</small>
        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
          <div class="invalid-feedback">Example invalid custom file feedback</div>
      </div>
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
        <small id="emailHelp" class="form-text text-muted">Masukan file Fotocopy Surat Nikah Sipil Orang Tua (bagi yang menikah di luar gereja).</small>
        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
          <div class="invalid-feedback">Example invalid custom file feedback</div>
      </div>
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
        <small id="emailHelp" class="form-text text-muted">Masukan file Fotocopy Akte Kelahiran atau Keterangan Lahir.</small>
        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
          <div class="invalid-feedback">Example invalid custom file feedback</div>
      </div>
      <div class="custom-file">
        <input type="file" class="custom-file-input" id="validatedCustomFile" required>
        <small id="emailHelp" class="form-text text-muted">Masukan file Fotocopy Surat Nikah Gereja Katolik atau Surat Baptis dari Wali Baptis.</small>
        <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
          <div class="invalid-feedback">Example invalid custom file feedback</div>
      </div>
  		<div class="form-group form-check">
    		<input type="checkbox" class="form-check-input" id="exampleCheck1">
    		<label class="form-check-label" for="exampleCheck1">Check me out</label>
  		</div>
  		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	
@endsection
