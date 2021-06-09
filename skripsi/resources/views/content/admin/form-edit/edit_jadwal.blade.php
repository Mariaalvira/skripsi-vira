@extends('layouts.admin')

@section('content')
<?php
    $years = range(1900, strftime("%Y", time()));
?>
    <br>
    <div class="h1 text-center">
        <p>Edit Data Jadwal</p>
    </div>
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <form action="/admin/jadwal/update/{{ $datas->id }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-6">
                            <label for="exampleInputJadwal1">Jadwal</label>
                            <input type="date" class="form-control" id="exampleInputJadwal1" aria-describedby="jadwalHelp"
                                placeholder="Masukan Jadwal Sakramen" name="jadwal" value="{{ $datas->jadwal }}">
                        </div>
                        <div class="col-md-6">
                            <label for="exampleInputPeriode1">Periode</label>
                            <br>
                            <select name="periode" class="form-control">
                                <option>Select Year</option>
                                <?php foreach($years as $year) : ?>
                                    <option value="<?php echo $year; ?>" 
                                        <?php if ($datas->periode == $year): ?>
                                            selected
                                        <?php endif ?>>
                                        <?php echo $year; ?>  
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="exampleInputTtlPelaksanaan1">Biaya</label>
                    <input type="number" class="form-control" id="exampleInputTtlPelaksanaan1" placeholder="Masukan Biaya"
                        name="biaya" value="{{ $datas->biaya }}">
                </div>
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-4 pt-0">Status Perkawinan Orangtua</legend>
                        <div class="col-sm-8">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="nama_sakramen"
                                    id="gridRadios1" value="Baptis Anak" {{ $datas->nama_sakramen == 'Baptis Anak' ? 'checked' : '' }}>
                                <label class="form-check-label" for="gridRadios1">
                                    Baptis Anak
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="nama_sakramen"
                                    id="gridRadios2" value="Baptis Dewasa" {{ $datas->nama_sakramen == 'Baptis Dewasa' ? 'checked' : '' }}>
                                <label class="form-check-label" for="gridRadios2">
                                    Baptis Dewasa
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="nama_sakramen"
                                    id="gridRadios3" value="Komuni Pertama" {{ $datas->nama_sakramen == 'Komuni Pertama' ? 'checked' : '' }}>
                                <label class="form-check-label" for="gridRadios3">
                                    Komuni Pertama
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="nama_sakramen"
                                    id="gridRadios3" value="Penguatan" {{ $datas->nama_sakramen == 'Penguatan' ? 'checked' : '' }}>
                                <label class="form-check-label" for="gridRadios3">
                                    Penguatan
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="nama_sakramen"
                                    id="gridRadios3" value="Perkawinan" {{ $datas->nama_sakramen == 'Perkawinan' ? 'checked' : '' }}>
                                <label class="form-check-label" for="gridRadios3">
                                    Perkawinan
                                </label>
                            </div>
                        </div>
                    </div>
                </fieldset>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-lg-2"></div>
    </div>



@endsection
