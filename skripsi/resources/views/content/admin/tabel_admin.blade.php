@extends('layouts.admin')

@section('content')

	<table class="demo-table responsive" >
		<caption class="title">Tabel Admin</caption>
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Nama</th>
				<th scope="col">Alamat</th>
				<th scope="col">Lingkungan</th>
				<th scope="col">Telp</th>
				<th scope="col">Email</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td data-header="No" class="title">1</td>
				<td data-header="Nama" class="title">Maria</td>
				<td data-header="Alamat" >Jalan Janti Yogyakarta</td>
				<td data-header="Lingkungan" class="title">Santo Farnsiskus</td>
				<td data-header="Telp" >08562136x</td>
				<td data-header="Email" >maria123@gmail.com</td>
			</tr>
			<tr>
				<td data-header="No" class="title">2</td>
				<td data-header="Nama" class="title">Eustakia</td>
				<td data-header="Alamat" >Sorowajan Yogyakarta</td>
				<td data-header="Lingkungan" class="title">St.Maria</td>
				<td data-header="Telp" >081564328x</td>
				<td data-header="Email" >mahalia@gmail.com</td>
			</tr>
		</tbody>
	</table>

@endsection