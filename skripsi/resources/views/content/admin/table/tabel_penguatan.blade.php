@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-11">
            <table class="demo-table responsive">
                <caption class="title">Tabel Sakramen Penguatan</caption>
                <thead class="text-center">
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col" class="text-center">Nama</th>
                        <th scope="col" class="text-center">Nama Baptis</th>
                        <th scope="col" class="text-center">Nama Wali Penguatan</th>
                        <th scope="col" class="text-center">Paroki Asal</th>
                        <th scope="col" class="text-center">Email</th>
                        <th scope="col" colspan="2" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $index => $data)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $data->nama_diri }}</td>
                            <td>{{ $data->nama_baptis }}</td>
                            <td>{{ $data->nama_wali_penguatan }}</td>
                            <td>{{ $data->paroki_asal }}</td>
                            <td>maria123@gmail.com</td>
                            <td>
                                <a class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top"
                                    title="edit data"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top"
                                    title="send email"><i class="fa fa-envelope"></i></a>
                                <a class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top"
                                    title="detail data"><i class="fa fa-info"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
