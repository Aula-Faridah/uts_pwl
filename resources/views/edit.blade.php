@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
                Edit Artikel
            </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('posts.update', $Post->id) }}" id="myForm">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" class="form-control" id="judul" value="{{ $Post->judul }}"
                            ariadescribedby="Nim">
                    </div>
                    <div class="form-group">
                        <label for="gambar">Gambar</label>
                        <input type="file" name="gambar" class="form-control" id="gambar" value="{{ $Post->gambar }}"
                            ariadescribedby="gambar">
                    </div>
                    <div class="form-group">
                        <label for="artikel">Artikel</label>
                        <input type="text" name="artikel" class="form-control" id="artikel" value="{{ $Post->artikel }}"
                            ariadescribedby="artikel">
                    </div>
                    <button type="submit" class="text-uppercase btn btn-primary">Submit</button>
                    <a class="text-uppercase btn btn-secondary " href="{{ route('home') }}">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection