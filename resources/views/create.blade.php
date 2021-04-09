@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">

                <div class="col-lg-12 text-uppercase text-center">
                    <h2 class="section-title">Tambah Artikel</h2>
                    <div class="section-title-underline-blue"></div>
                    <hr class="section-title-underline">
                    <p class="small">Proin Gravidani</p>
                </div>

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
                <form method="post" action="{{ route('posts.store') }}" id="myForm" class="tm-contact-form">
                    @csrf

                    <section class="templatemo-container">
                        <div class="container">

                            <div class="row margin-bottom-30">

                                <div class="col-lg-12 col-md-12 contact-right">

                                    <div class="tm-contact-form">
                                        <div class="form-group">
                                            <input type="text" name="judul" class="form-control" id="judul"
                                                aria-describedby="judul" placeholder="JUDUL" />
                                        </div>
                                        <div class="form-group">
                                            <input type="file" name="gambar" class="form-control" id="gambar"
                                                aria-describedby="gambar" placeholder="GAMBAR" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="artikel" class="form-control" id="artikel"
                                                aria-describedby="artikel" placeholder="ISI ARTIKEL" />
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="submit"
                                                class="text-uppercase btn btn-success mt-3">Submit</button>
                                                <a class="text-uppercase btn btn-secondary mt-3" href="{{ route('home') }}">Kembali</a>
                                        </div>
                                    </div>
                </form>
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
    </section>

</div>
</div>
</div>
</div>
@endsection