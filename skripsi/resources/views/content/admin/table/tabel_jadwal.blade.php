@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-md-11">
            <br><br>
            <div class="row">
                <div class="col-md-2">
                    <h4 class="title"><strong>Tabel Jadwal</strong></h4>
                </div>
                <div class="col-md-8"></div>
                <div class="col-md-2">
                    <a href="{{ url('admin/jadwal/form-create') }}" class="btn btn-primary btn">Tambah Data</a>
                </div>
            </div>
            <br>
            <table class="demo-table responsive">
                <div class="row">
                    <div class="col-md-12 mt-3">
                        @if (session('successMsg'))
                            <div class="alert alert-success" role="alert">
                                {{ session('successMsg') }}
                            </div>
                        @endif
                    </div>
                </div>
                <thead class="text-center">
                    <tr>
                        <th scope="col" class="text-center">No</th>
                        <th scope="col" class="text-center">Jadwal</th>
                        <th scope="col" class="text-center">Biaya</th>
                        <th scope="col" class="text-center">Periode</th>
                        <th scope="col" class="text-center">Sakramen</th>
                        <th scope="col" colspan="2" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas as $index => $data)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $data->jadwal }}</td>
                            <td>{{ number_format($data->biaya) }}</td>
                            <td>{{ $data->periode }}</td>
                            <td>{{ $data->nama_sakramen }}</td>
                            <td class="text-center">
                                <a href="{{ url('admin/jadwal/form-edit/' . $data->id) }}" class="btn btn-success btn-sm"
                                    data-toggle="tooltip" data-placement="top" title="edit data"><i class="fa fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
