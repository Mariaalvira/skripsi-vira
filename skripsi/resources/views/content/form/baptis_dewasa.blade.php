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
        <label for="exampleInputAlamat1">Alamat</label>
        <input type="text" class="form-control" id="exampleInputAlamat1" placeholder="Masukan Alamat dan No.Telp">
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
          <legend class="col-form-label col-sm-2 pt-0">Status Perkawinan Calon Baptis</legend>
       <div class="col-sm-10">
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
            <label class="form-check-label" for="gridRadios1">
            Belum menikah
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
            <label class="form-check-label" for="gridRadios2">
            Akan Menikah dengan (tempat dan tanggal)
            </label>
          </div>
          <div class="form-check disabled">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
            <label class="form-check-label" for="gridRadios3">
            Sudah Menikah secara Gereja/KUA/Catatan Sipil/Cara Lain (dengan dan tempat & tanggal)
            </label>
          </div>
          <div class="form-check disabled">
            <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios3" value="option3" disabled>
            <label class="form-check-label" for="gridRadios3">
            Perkawinan telah diputuskan/ dibatalkan karena : Kematian/ Perceraian Sipil/ Pemutusan/ Pembatalan Gereja/ Cara Lain (Mohon disertakan fotocopy surat bukti) (tanggal dan no.surat/akta)
            </label>
          </div>
        </div>
      </div>
    </fieldset>
      <div class="form-group">
        <label for="exampleInputPelajaran1">Mengikuti Pelajaran Agama Sejak</label>
        <input type="text" class="form-control" id="exampleInputPelajaran1" placeholder="Masukan Sejak Kapan Mengikuti Pelajaran Agama">
      </div>
      <div class="form-group">
        <label for="exampleInputPerayaan1">Mengikuti Perayaan Ekaristi Sejak</label>
        <input type="text" class="form-control" id="exampleInputPerayaan1" placeholder="Masukan Sejak Kapan Mengikuti Perayaan Ekaristi">
      </div>
      <div class="form-group">
        <label for="exampleInputKegiatan1">Mengikuti Kegiatan Lingkungan Sejak</label>
        <input type="text" class="form-control" id="exampleInputKegiatan1" placeholder="Masukan Sejak Kapan Mengikuti Kegiatan Lingkungan">
      </div>
      <div class="form-group">
        <label for="exampleInputNamaGurus1">Nama Guru Agama yang mengajar</label>
        <input type="text" class="form-control" id="exampleInputNamaGuru1" placeholder="Masukan Nama Guru yang Mengajar">
      </div>
      <div class="form-group">
        <label for="exampleInputNamaWali1">Nama Wali Baptis</label>
        <input type="text" class="form-control" id="exampleInputNamaWali1" placeholder="Masukan Nama Wali Baptis">
      </div>
      <div class="form-group">
        <label for="exampleInputPemberkatan1">Pemberkatan dan Pembaptisan</label>
        <input type="text" class="form-control" id="exampleInpuPemberkatan1" placeholder="Masukan Pemberkatan dan Pembaptisan">
      </div>
      <div class="form-group">
        <label for="exampleInputNamaPembaptis1">Fc Akte Kelahiran</label>
        <input type="file" class="form-control" id="exampleInputPembaptis1" placeholder="Masukan Fc Akte Kelahiran" name="fc_akte_kelahiran">
      </div>
       <div class="form-group">
        <label for="exampleInputNamaPembaptis1">Fc Surat Ganti Nama</label>
        <input type="file" class="form-control" id="exampleInputPembaptis1" placeholder="Masukan Fc Surat Ganti Nama" name="fc_surat_ganti_nama">
      </div>
      <div class="form-group">
        <label for="exampleInputNamaPembaptis1">Fc Surat Nikah Calon Baptis</label>
        <input type="file" class="form-control" id="exampleInputPembaptis1" placeholder="Masukan Fc Akte Surat Nikah" name="fc_surat_nikah">
      </div>
      <div class="form-group">
        <label for="exampleInputNamaPembaptis1">Fc Surat Nikah Wali Baptis</label>
        <input type="file" class="form-control" id="exampleInputPembaptis1" placeholder="Masukan Fc Surat Nikah Wali Baptis" name="fc_surat_nikah_wali_baptis">
      </div>
  		<div class="form-group form-check">
    		<input type="checkbox" class="form-check-input" id="exampleCheck1">
    		<label class="form-check-label" for="exampleCheck1">Check me out</label>
  		</div>
  		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
	
@endsection
