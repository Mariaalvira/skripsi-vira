@extends('layouts.user')

@section('content')
	<form>
    <fieldset><legend>Menerangkan Bahwa</legend>
  		<div class="form-group">
  			<label for="exampleInputNama1">Nama Lengkap</label>
    		<input type="text" class="form-control" id="exampleInputNama1" aria-describedby="namaHelp" placeholder="Masukan nama">
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
        <label for="exampleInputTtl1">Tempat dan Tanggal Baptis</label>
        <input type="text" class="form-control" id="exampleInputTtl1" placeholder="Masukan Tempat Tanggal Lahir">
      </div>
      <div class="form-group">
        <label for="exampleInputPekerjaan1">Pekerjaan</label>
        <input type="text" class="form-control" id="exampleInputPekerjaan1" placeholder="Masukan Pekerjaan Anda">
      </div>
      <div class="form-group">
        <label for="exampleInputNamaAyah1">Nama Ayah</label>
        <input type="text" class="form-control" id="exampleInputNamaAyah1" placeholder="Masukan Nama Ayah">
      </div>
      <div class="form-group">
        <label for="exampleInputNamaIbu1">Nama Ibu</label>
        <input type="text" class="form-control" id="exampleInputNamaIbu1" placeholder="Masukan Nama Ibu">
      </div>
      <div class="form-group">
        <label for="exampleInputLingkungan1">Lingkungan dan Paroki</label>
        <input type="text" class="form-control" id="exampleInputLingkungan1" placeholder="Masukan Nama Lingkungan dan Paroki">
      </div>
      <div class="form-group">
        <label for="exampleInputAlamat1">Alamat & No.Telp</label>
        <input type="text" class="form-control" id="exampleInputAlamat1" placeholder="Masukan Alamat & No.Telp">
      </div>
    </fieldset>
    <fieldset><legend>Akan Melangsungkan Perkawinan dengan</legend>
      <div class="form-group">
        <label for="exampleInputNama1">Nama Lengkap</label>
        <input type="text" class="form-control" id="exampleInputNama1" aria-describedby="namaHelp" placeholder="Masukan nama">
      </div>
      <div class="form-group">
        <label for="exampleInputTtl1">Tempat Tanggal Lahir</label>
        <input type="text" class="form-control" id="exampleInputTtl1" placeholder="Masukan Tempat Tanggal Lahir">
      </div>
      <div class="form-group">
        <label for="exampleInputTtl1">Tempat dan Tanggal Baptis</label>
        <input type="text" class="form-control" id="exampleInputTtl1" placeholder="Masukan Tempat Tanggal Lahir">
      </div>
      <div class="form-group">
        <label for="exampleInputPekerjaan1">Pekerjaan</label>
        <input type="text" class="form-control" id="exampleInputPekerjaan1" placeholder="Masukan Pekerjaan Anda">
      </div>
      <div class="form-group">
        <label for="exampleInputNamaAyah1">Nama Ayah</label>
        <input type="text" class="form-control" id="exampleInputNamaAyah1" placeholder="Masukan Nama Ayah">
      </div>
      <div class="form-group">
        <label for="exampleInputNamaIbu1">Nama Ibu</label>
        <input type="text" class="form-control" id="exampleInputNamaIbu1" placeholder="Masukan Nama Ibu">
      </div>
      <div class="form-group">
        <label for="exampleInputLingkungan1">Lingkungan dan Paroki</label>
        <input type="text" class="form-control" id="exampleInputLingkungan1" placeholder="Masukan Nama Lingkungan dan Paroki">
      </div>
      <div class="form-group">
        <label for="exampleInputAlamat1">Alamat & No.Telp</label>
        <input type="text" class="form-control" id="exampleInputAlamat1" placeholder="Masukan Alamat & No.Telp">
      </div>
    </fieldset>
    <fieldset><legend>Perkawinan akan dilangsungkan di Gereja</legend>
      <div class="form-group">
        <label for="exampleInputHari1">Pada Hari/ Tanggal</label>
        <input type="text" class="form-control" id="exampleInputHari1" placeholder="Masukan Hari & Tanggal Pelaksanaan">
      </div>
      <div class="form-group">
        <label for="exampleInputWaktu1">Pukul</label>
        <input type="text" class="form-control" id="exampleInputWaktu1" placeholder="Masukan Waktu Pelaksanaan">
      </div>
    </fieldset>
  		<div class="form-group form-check">
    		<input type="checkbox" class="form-check-input" id="exampleCheck1">
    		<label class="form-check-label" for="exampleCheck1">Check me out</label>
  		</div>
  		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	
@endsection
