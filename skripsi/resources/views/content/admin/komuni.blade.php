@extends('layouts.admin')

@section('content')

	<table class="demo-table responsive" >
		<caption class="title">Tabel Umat</caption>
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Nama Diri</th>
				<th scope="col">Nama Baptis</th>
				<th scope="col">Tempat Tanggal Lahir</th>
				<th scope="col">Buku Baptis Hal. No</th>
				<th scope="col">Nama Sekolah, Kelas</th>
				<th scope="col">Lingkungan, Paroki</th>
				<th scope="col">Nama Ayah</th>
				<th scope="col">Nama Ibu</th>
				<th scope="col">Alamat Orang Tua</th>
				<th scope="col">No Telepon/Hp</th>
				<th scope="col">Fc Surat Baptis</th>
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