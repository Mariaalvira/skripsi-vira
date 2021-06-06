@extends('layouts.user')

@section('content')
	<form>
    <div class="form-group">
        <label for="exampleInputLingkungan1">Lingkungan</label>
        <input type="text" class="form-control" id="exampleInputLingkungan1" aria-describedby="namaHelp" placeholder="Masukan Lingkungan Tempat Tinggal">
      </div>
  		<div class="form-group">
  			<label for="exampleInputNama1">Nama Penerima</label>
    		<input type="text" class="form-control" id="exampleInputNama1" aria-describedby="namaHelp" placeholder="Masukan nama">
  		</div>
  		<div class="form-group">
    		<label for="exampleInputUsia1">Usia</label>
    		<input type="text" class="form-control" id="exampleInputUsia1" placeholder="Masukan Usia Penerima">
  		</div>
      <div class="form-group">
        <label for="exampleInputTempat1">Tempat Penerima</label>
        <input type="text" class="form-control" id="exampleInputTempat1" placeholder="Masukan Tempat Penerima">
      </div>
      <div class="form-group">
        <label for="exampleInputTanggal1">Tanggal</label>
        <input type="text" class="form-control" id="exampleInputTanggal1" placeholder="Masukan Tanggal Menerima">
      </div>
      <div class="form-group">
        <label for="exampleInputNama1">Pastor yang menerimakan</label>
        <input type="text" class="form-control" id="exampleInputNama1" placeholder="Masukan Nama Pastor yang menerimakan">
      </div>
      <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input type="text" class="form-control" id="exampleInputEmail1"
            placeholder="Masukan Email Anda" name="email">
      </div>
  		<div class="form-group form-check">
    		<input type="checkbox" class="form-check-input" id="exampleCheck1">
    		<label class="form-check-label" for="exampleCheck1">Check me out</label>
  		</div>
  		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	
@endsection
