@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Detail Artikel
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Judul: </b>{{$Post->judul}}</li>
                    <li class="list-group-item"><b>Gambar: </b>{{$Post->gambar}}</li>
                    <li class="list-group-item"><b>Artikel: </b>{{$Post->artikel}}</li>
                </ul>
            </div>
            <a class="btn btn-success mt-3" href="{{ route('home') }}">Kembali</a>
        </div>
    </div>
</div>
@endsection