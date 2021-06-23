<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pendaftaran Baptis Anak </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" type="text/css">
</head>
<body>

	<div class="container">
		<center>
			<h4>Laporan Pendaftaran Baptis Anak</h4>
		</center>
		<a href="/baptisAnak/cetak_pdf" class="btn btn-primary" target="_blank">CETAK PDF</a>
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
				@foreach($baptisAnak as $p)
				<tr>
					<td>{{ $i++ }}</td>
					<td>{{$p->nama}}</td>
					<td>{{$baptisAnak->nama_diri}}</td>
		            <td>{{$baptisAnak->nama_baptis}}</td>
		            <td>{{$baptisAnak->tempat_lahir}}</td>
		           	<td>{{$baptisAnak->tanggal_lahir}}</td>
		           	<td>{{$baptisAnak->nama_ayah}}</td>
		            <td>{{$baptisAnak->nama_ibu}}</td>
		            <td>{{$baptisAnak->umur}}</td>
		            <td>{{$baptisAnak->status_perkawinan_orangtua}}</td>
		            <td>{{$baptisAnak->alamat_orangtua}}</td>
		            <td>{{$baptisAnak->nama_wali_baptis}}</td>
		            <td>{{$baptisAnak->tempat_baptis}}</td>
		            <td>{{$baptisAnak->dibaptis_oleh}}</td>
		            <td>{{$baptisAnak->fc_surat_pernikahan_gereja_orangtua}}</td>
		           	<td>{{$baptisAnak->fc_surat_nikah_sipil_orangtua}}</td>
		            <td>{{$baptisAnak->fc_akte_kelahiran}}</td>
		            <td>{{$baptisAnak->fc_surat_nikah_gereja_wali_baptis}}</td>
		            <td>{{$baptisAnak->status_pembayaran}}</td>
		           <td>{{$baptisAnak->email}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>

	</div>
</body>
</html>