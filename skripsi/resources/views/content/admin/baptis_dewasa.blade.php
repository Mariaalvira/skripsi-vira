@extends('layouts.admin')

@section('content')

	<table class="demo-table responsive" >
		<caption class="title">Tabel Umat</caption>
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Lingkungan</th>
				<th scope="col">Nama Diri</th>
				<th scope="col">Nama Baptis</th>
				<th scope="col">Tempat Tanggal Lahir</th>
				<th scope="col">Alamat</th>
				<th scope="col">No Telepon/Hp</th>
				<th scope="col">Nama Ayah</th>
				<th scope="col">Nama Ibu</th>
				<th scope="col">Status Perkawinan Calon Baptis</th>
				<th scope="col">Belajar Agama Sejak</th>
				<th scope="col">Mengikuti Perayaan Ekaristi Sejak</th>
				<th scope="col">Mengikuti Kegiatan Lingkungan Sejak</th>
				<th scope="col">Nama Guru Agama Yang Mengajar</th>
				<th scope="col">Nama Wali Baptis</th>
				<th scope="col">Tempat Baptis</th>
				<th scope="col">Taanggal Baptis</th>
				<th scope="col">Dibaptis Oleh</th>
				<th scope="col">Fc Akte LahirS</th>
				<th scope="col">Fc Surat Ganti Nama</th>
				<th scope="col">Fc Surat Nikah Gereja</th>
				<th scope="col">Fc Surat Nikah Wali Baptis</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td data-header="No" class="title">1</td>
				<td data-header="Nama" class="title">Maria</td>
				<td data-header="Alamat" >Jalan Janti Yogyakarta</td>
				<td data-header="Lingkungan" class="title">Santo Farnsiskus</td>
				<td data-header="Sakramen" >Baptis Dewasa</td>
				<td data-header="Telp" >08562136x</td>
				<td data-header="Email" >maria123@gmail.com</td>
				<td data-header="Status Bayar" >Lunas</td>
			</tr>
			<tr>
				<td data-header="No" class="title">2</td>
				<td data-header="Nama" class="title">Eustakia</td>
				<td data-header="Alamat" >Sorowajan Yogyakarta</td>
				<td data-header="Lingkungan" class="title">St.Maria</td>
				<td data-header="Sakramen" >Perkawinan</td>
				<td data-header="Telp" >081564328x</td>
				<td data-header="Email" >mahalia@gmail.com</td>
				<td data-header="Status Bayar" >Belum Bayar</td>
			</tr>
		</tbody>
	</table>

@endsection