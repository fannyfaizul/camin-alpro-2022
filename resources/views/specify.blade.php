@extends('components/layout')

@section('content')
<section>
    <div class="container-xl">
            <h1 class="text-center">Daftar Camin Alpro 2022</h1>
            <div class="row mt-4" style="">
                    <div class="card col-3 mx-auto">
                        <img src="https://buildyourspechere.com/wp-content/uploads/2020/10/placeholder-image-person-jpg.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $data["nama"] }}
                            </h5>
                            <p class="card-text">Nrp : {{ $data["nrp"] }}</p>
                            <p class="card-text">Jurusan : {{ $data["jurusan"] }}</p>
                            <p class="card-text">Angkatan : {{ $data["angkatan"] }}</p>
                            <p class="card-text">Asal Kota : {{ $data["kotalahir"] }}</p>
                            <p class="card-text">Tanggal Lahir : {{ $data["tgllahir"] }}</p>
                            <p class="card-text">Golongan Darah : {{ $data["goldar"] }}</p>
                        </div>
                    </div>
            </div>
        </div>
    </section>
@endsection