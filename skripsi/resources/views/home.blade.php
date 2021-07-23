@extends('layouts.user')

@section('content')
    <div class="container p-2 my-2">
        <div class="row text-center">
            <div class="col-3">
                <div class="container p-1 border">
                    <img src="{{ asset('images/eucharist.jpg') }}" class="d-md-block w-100" height="200" alt="..."> 
                    <p>Perayaan Ekaristi Online Gereja Pangkalan<br>
                        <br>
                        Sehubung dengan kebijakan PPKM Pemerintah dan Surat Edaran dari Keuskupan Agung Semarang dari tanggal 3 - 20 Juli 2021 segala peribadatan tatap muka di gereja ditiadakan. Namun kerinduan untuk tetap bisa mendengarkan sabda Tuhan dan berkomunikasi secara batin terhadap Tuhan dapat dilayani melalui Misa Online.
                        Paroki Pangkalan 
                        Jadwal misa online Minggu 08.00 WIB
                    </p>

                </div>
            </div>
            <div class="col-6 ">
                <div class="container p-1 border">
                    <img src="{{ asset('images/peresmian.jpg') }}" class="d-md-block w-100" height="200" alt="..."> 
                    <P>Peresmian Revitalisasi Paroki Gereja Santo Mikael
                        <br>
                        Danlanud Adisutjipto Marsma TNI Ir. Bob Henry Panggabean (kedua dari kiri) menghadiri Lustrum II sekaligus meresmikan revitalisasi Paroki Gereja Santo Mikael Lanud Adisutjipto bersama Wakil Uskup TNI-POLRI, Romo Yos Bintoro (kedua dari kanan), pada hari Minggu (29/9), di area Pangkalan TNI AU Adisutjipto, Yogyakarta.
                    </P>
                </div>
            </div>
            <div class="col-3 ">
                <div class="container p-1 border">
                    <img src="{{ asset('images/kalender.jpg') }}" class="d-md-block w-100" height="200" alt="..."> 
                </div>
            </div>
          </div>
    </div>
@endsection
