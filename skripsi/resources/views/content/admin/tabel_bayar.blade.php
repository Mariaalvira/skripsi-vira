@extends('layouts.admin')

@section('content')

	<table class="demo-table responsive" >
		<caption class="title">Tabel Bayar</caption>
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">ID Bayar</th>
				<th scope="col">Tanggal Bayar</th>
				<th scope="col">Nama</th>
				<th scope="col">Sakramen</th>
				<th scope="col">Bukti Bayar</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td data-header="No" class="title">1</td>
				<td data-header="ID Bayar" class="title">3452</td>
				<td data-header="Tanggal Bayar" class="title">10-02-2021</td>
				<td data-header="Nama" class="title">Maria</td>
				<td data-header="Sakramen" >Baptis Dewasa</td>
				<td data-header="Bukti Bayar" >Upload File</td>
			</tr>
			<tr>
				<td data-header="No" class="title">2</td>
				<td data-header="ID Bayar" class="title">0985</td>
				<td data-header="Tanggal Bayar" class="title">28-02-2021</td>
				<td data-header="Nama" class="title">Eustakia</td>
				<td data-header="Sakramen" >Perkawinan</td>
				<td data-header="Bukti Bayar" >Upload File</td>
			</tr>
		</tbody>
	</table>

@endsection