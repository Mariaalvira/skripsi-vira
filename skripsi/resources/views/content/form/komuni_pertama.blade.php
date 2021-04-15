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
        <label for="exampleInputTtl1">Tempat dan Tanggal Baptis</label>
        <input type="text" class="form-control" id="exampleInputTtl1" placeholder="Masukan Tempat Tanggal Lahir">
      </div>
      <div class="form-group">
        <label for="exampleInputBuku1">Buku Baptis</label>
        <input type="text" class="form-control" id="exampleInputBuku1" placeholder="Masukan  Hal dan No Buku Baptis">
      </div>
      <div class="form-group">
        <label for="exampleInputSekolah1">Nama Sekolah, Kelas</label>
        <input type="text" class="form-control" id="exampleInputSekolah1" placeholder="Masukan Nama Sekolah dan Kelas">
      </div>
      <div class="form-group">
        <label for="exampleInputLingkungan1">Lingkungan dan Paroki</label>
        <input type="text" class="form-control" id="exampleInputLingkungan1" placeholder="Masukan Nama Lingkungan dan Paroki">
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
        <label for="exampleInputAlamat1">Alamat Orang Tua</label>
        <input type="text" class="form-control" id="exampleInputAlamat1" placeholder="Masukan Alamat Orangtua">
      </div>
      <div class="form-group">
        <label for="exampleInputTelp1">Nomor Telepon/ Hp</label>
        <input type="text" class="form-control" id="exampleInputTelp1" placeholder="Masukan Nomor TeLepon/ Hp">
      </div>
      <div class="form-group">
        <label for="exampleInputNamaPembaptis1">Fc Surat Baptis</label>
        <input type="file" class="form-control" id="exampleInputPembaptis1" placeholder="Masukan Fc Surat Baptis" name="fc_surat_baptis">
      </div>
  		<div class="form-group form-check">
    		<input type="checkbox" class="form-check-input" id="exampleCheck1">
    		<label class="form-check-label" for="exampleCheck1">Check me out</label>
  		</div>
  		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	
@endsection
