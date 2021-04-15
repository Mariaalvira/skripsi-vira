@extends('layouts.user')

@section('content')
	<form>
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
        <input type="text" class="form-control" id="exampleInputTtl1" placeholder="Masukan Tempat Tanggal Lahir" name="tempat_tanggal_lahir">
      </div>
      <div class="form-group">
        <label for="exampleInputTtl1">Tempat dan Tanggal Baptis</label>
        <input type="text" class="form-control" id="exampleInputTtl1" placeholder="Masukan Tempat Tanggal Lahir" name="tempat_dan_tanggal_baptis">
      </div>
      <div class="form-group">
        <label for="exampleInputBuku1">Buku Baptis</label>
        <input type="text" class="form-control" id="exampleInputBuku1" placeholder="Masukan No Buku Baptis" name="buku_baptis">
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
        <label for="exampleInputAlamat1">Alamat Calon</label>
        <input type="text" class="form-control" id="exampleInputAlamat1" placeholder="Masukan Alamat Calon" name="alamat_calon">
      </div>
      <div class="form-group">
        <label for="exampleInputLingkungan1">Lingkungan dan Paroki</label>
        <input type="text" class="form-control" id="exampleInputLingkungan1" placeholder="Masukan Nama Lingkungan dan Paroki" name="lingkungan_dan_paroki">
      </div>
      <div class="form-group">
        <label for="exampleInputPelindung1">Santo/a Pelindung Penguatan/ Hp</label>
        <input type="text" class="form-control" id="exampleInputPelindung1" placeholder="Masukan Nama Santo/a Pelindung Penguatan" name="santo/a_pelindung_penguatan">
      </div>
      <div class="form-group">
        <label for="exampleInputWali1">Wali Penguatan</label>
        <input type="text" class="form-control" id="exampleInputWali1" placeholder="Masukan Nama Wali Penguatan" name="nama_wali_penguatan">
      </div>
      <div class="custom-file">
        <input type="text" class="custom-file-input" id="validatedCustomFile" required name="fc_surat_baptis">
        <small id="emailHelp" class="form-text text-muted">Masukan file Fotocopy Surat Baptis.</small>
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
