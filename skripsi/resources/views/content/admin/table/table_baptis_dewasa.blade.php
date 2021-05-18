@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-11">
        <table class="demo-table responsive">
            <caption class="title">Tabel Baptis Dewasa</caption>
            <thead class="text-center">
                <tr>
                    <th scope="col" class="text-center">No</th>
                    <th scope="col" class="text-center">Nama</th>
                    <th scope="col" class="text-center">Nama Baptis</th>
                    <th scope="col" class="text-center">Nama Wali Baptis</th>
                    <th scope="col" class="text-center">Alamat</th>
                    <th scope="col" class="text-center">Email</th>
                    <th scope="col" colspan="2" class="text-center">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($datas as $index=>$data)
                <tr>
                    <td>{{ $index+1 }}</td>
                    <td>{{ $data->nama_diri }}</td>
                    <td>{{ $data->nama_baptis }}</td>
                    <td>{{ $data->nama_wali_baptis }}</td>
                    <td>{{ $data->alamat }}</td>
                    <td>maria123@gmail.com</td>
                    <td><a type="button" class="btn btn-primary"><i class="fa fa-edit"></i></a></td>
                    <td><a type="button" class="btn btn-danger"><i class="fa fa-trash"></i></a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
