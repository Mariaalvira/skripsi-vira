<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pendaftaran Baptis Anak</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Laporan Pendaftaran Baptis Anak</h4>
		<h6><a target="_blank" href="https://www.malasngoding.com/membuat-laporan-…n-dompdf-laravel/">www.malasngoding.com</a></h5>
	</center>

	<table class="table table-bordered">
		<thead>
				<tr>
					<th>nama_diri</th>
		            <th>nama_baptis</th>
		            <th>tempat_lahir</th>
		           	<th>tanggal_lahir</th>
		           	<th>nama_ayah</th>
		            <th>nama_ibu</th>
		            <th>umur</th>
		            <th>status_perkawinan_orangtua</th>
		            <th>alamat_orangtua</th>
		            <th>nama_wali_baptis</th>
		            <th>tempat_baptis</th>
		            <th>dibaptis_oleh</th>
		            <th>fc_surat_pernikahan_gereja_orangtua</th>
		           	<th>fc_surat_nikah_sipil_orangtua</th>
		            <th>fc_akte_kelahiran</th>
		            <th>fc_surat_nikah_gereja_wali_baptis</th>
		            <th>status_pembayaran</th>
		           <th>email</th>
				</tr>
			</thead>
			<tbody>
				@php $i=1 @endphp
				@foreach($data as $p)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$p->nama}}</td>
					<td>{{$p->nama_diri}}</td>
		            <td>{{$p->nama_baptis}}</td>
		            <td>{{$p->tempat_lahir}}</td>
		           	<td>{{$p->tanggal_lahir}}</td>
		           	<td>{{$p->nama_ayah}}</td>
		            <td>{{$p->nama_ibu}}</td>
		            <td>{{$p->umur}}</td>
		            <td>{{$p->status_perkawinan_orangtua}}</td>
		            <td>{{$p->alamat_orangtua}}</td>
		            <td>{{$p->nama_wali_baptis}}</td>
		            <td>{{$p->tempat_baptis}}</td>
		            <td>{{$p->dibaptis_oleh}}</td>
		            <td>{{$p->fc_surat_pernikahan_gereja_orangtua}}</td>
		           	<td>{{$p->fc_surat_nikah_sipil_orangtua}}</td>
		            <td>{{$p->fc_akte_kelahiran}}</td>
		            <td>{{$p->fc_surat_nikah_gereja_wali_baptis}}</td>
		            <td>{{$p->status_pembayaran}}</td>
		           <td>{{$p->email}}</td>
				</tr>
				@endforeach
			</tbody>
	</table>
</body>
</html>