@extends('layouts.master')

@section('topbar')
    @include('part.topbar')
@endsection

@section('sidebar')
    @include('part.sidebar')
@endsection

@section('judul')
<h1 class="text-primary">{{ $buku->judul }}</h1>
@endsection

@section('content')
    <div class="card mb-4">
        <div class="content m-4">
        @if($buku->gambar !=null)
        <img class="img mb-3" src="{{asset('/images/'.$buku->gambar)}}"style="height:200px;width:200px">
        @else
        <img class="img mb-3" src="{{asset('/images/noImage.jpg')}}"style="height:200px;width:200px">
        @endif
        @if ($buku->files != null)
        <img src="{{ asset('/img/pdf.jpg') }}" style="height:200px;width:200px" border="0">
        @endif
        <div id="pdf-viewer"></div>
        <h5 class="pengarang">Pengarang : <a href="#" class="text-primary" style="text-decoration: none">{{ $buku->pengarang }}</a></h5>
        <h5 class="penerbit">Penerbit : <a href="#" class="text-primary" style="text-decoration: none">{{ $buku->penerbit }}</a></h5>
        <h5 class="tahun_terbit">Tahun Terbit : <a href="#" class="text-primary" style="text-decoration: none">{{ $buku->tahun_terbit }}</a></h5>
        <h5 class="deskripsi">Deskripsi : <br><p class="deskripsi mt-2" style="text-align:justify; text-justify:inter-word; text-indent:1rem; letter-spacing:.1rem; word-spacing:.1rem">{{ $buku->deskripsi }}</p></h5>
        <a href="/buku" class="btn btn-primary">Kembali</a>
        <a href="{{ asset('/files/'.$buku->files) }}" class="btn btn-primary">Download Sinopsis Buku</a>
        <a class="btn btn-danger" a href="/peminjaman/create" style="text-decoration: none; color:white;">Pinjam Buku</a>
        </div>
    </div>
     <!-- Load PDF.js -->
     <script src="{{ asset('pdf.js') }}"></script>
    <script src="{{ asset('pdf.worker.js') }}"></script>
    <!-- Load custom PDF viewer script -->
    <script src="{{ asset('pdf_viewer.js') }}"></script>
@endsection
