@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-11">
        <table class="demo-table responsive">
            <caption class="title">Tabel Sakramen Perkawinan</caption>
            <thead class="text-center">
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Nama Suami</th>
                    <th scope="col" class="text-center">Nama Istri</th>
                    <th scope="col" class="text-center">Nama Gereja</th>
                    <th scope="col" class="text-center">Tanggal</th>
                    <th scope="col" class="text-center">Waktu</th>
                    <th scope="col" class="text-center">Email</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $index=>$data)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $data->nama_lengkap_suami }}</td>
                    <td>{{ $data->nama_lengkap_istri }}</td>
                    <td>{{ $data->gereja_pemberkatan_nikah }}</td>
                    <td>{{ $data->tanggal }}</td>
                    <td>{{ $data->pukul }}</td>
                    <td>maria123@gmail.com</td>
                    <td>
                        <a class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="edit data"><i class="fa fa-edit"></i></a>
                        <a class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="send email"><i class="fa fa-envelope"></i></a>
                        <a class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top" title="detail data"><i class="fa fa-info"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
