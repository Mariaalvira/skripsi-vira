@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-11">
        <table class="demo-table responsive">
            <caption class="title">Tabel Sakramen Komuni Pertama</caption>
            <div class="row">
                    <div class="col-md-12 mt-3">
                      @if(session('successMsg'))
                        <div class="alert alert-success" role="alert">
                            {{ session('successMsg') }}
                        </div>
                      @endif
                    </div>
                </div>
            <thead class="text-center">
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Nama</th>
                    <th scope="col" class="text-center">Nama Baptis</th>
                    <th scope="col" class="text-center">Lingkungan dan Paroki</th>
                    <th scope="col" class="text-center">Nomor Telepon</th>
                    <th scope="col" class="text-center">Email</th>
                    <th scope="col" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $index=>$data)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $data->nama_diri }}</td>
                    <td>{{ $data->nama_baptis }}</td>
                    <td>{{ $data->lingkungan_paroki }}</td>
                    <td>{{ $data->no_telepon }}</td>
                    <td>{{ $data->email }}</td>
                    <td >
                        <a href="{{ url('admin/form-edit/komuni-pertama/' . $data->id) }}" class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="edit data"><i class="fa fa-edit"></i></a>
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
