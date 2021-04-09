@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>DAFTAR ARTIKEL MULTI PROFILE</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('posts.create') }}"> Input Post</a>
            <a class="btn btn-secondary " href="{{ route('about') }}">Kembali</a>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>Judul</th>
        <th>Gambar</th>
        <th>Artikel</th>
        <th width="280px">Action</th>
    </tr>
    @foreach ($posts as $Post)
    <tr>
        <td>{{ $Post->judul }}</td>
        <td>{{ $Post->gambar }}</td>
        <td>{{ $Post->artikel }}</td>
        <td>
            <form action="{{ route('posts.destroy',$Post->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('posts.show',$Post->id) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('posts.edit',$Post->id) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach

</table>
</div>

@endsection
