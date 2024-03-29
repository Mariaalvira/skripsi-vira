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
                    <th scope="col" class="text-center">Status</th>
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
                    @if($data->status_pembayaran == "belum")
                                <td class="text-center"><span class="fa fa-window-close"></span></td>
                            @else
                                <td class="text-center"><span class="fa fa-check"></span></td>

                            @endif
                    <td>{{ $data->email }}</td>
                    <td>
                        @if ($data->status_pembayaran == 'belum')
                                <a href="{{ url('admin/form-edit/komuni-pertama/' . $data->id) }}"
                                        class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top"
                                        title="edit data"><i class="fa fa-edit"></i></a>
                                <a href="{{ url('admin/komuni-pertama/jadwal/' . $data->id) }}"
                                        class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top" title="konfirmasi pembayaran"><i class="fa fa-money"></i></a>
                                <a href="{{ url('admin/komuni-pertama/detail/' . $data->id) }}"
                                        class="btn btn-warning btn-sm" data-toggle="tooltip" data-placement="top"
                                        title="detail data"><i class="fa fa-info"></i></a>
                            @else
                                <a href="{{ url('admin/komuni-pertama/cetak_pdf/' . $data->id) }}"
                                        class="btn btn-primary btn-sm" data-toggle="tooltip" data-placement="top"
                                        title="Print Surat"><i class="fa fa-print"></i></a>
                            @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
