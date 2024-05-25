@extends('..layout.blog-layout-form')
@section('title', 'List Artikel')
@section('link', 'index')
@section('menu', 'Beranda')
@section('gambar', 'blog5.jpg')

@section('content')
<h3 class="keterangan">List Blog Kesehatan</h3>
@if (Auth::user())
<a href="/tambah" class="btn btn-primary" style="margin-left: 90px; margin-bottom:20px;">Tambah Artikel</a>
@endif
{{-- content --}}

<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        @foreach ($data as $item)
        <div class="col-3 menu2">
            {{-- card --}}
            <div class="card" style="width: 18rem;">
                <img style="height: 180px" src="{{asset('storage/gambar/'.$item['gambar'])}}" class="card-img-top" alt="...">
                <div class="card-body">
                  <div  style="height: 100px;">
                      <h5 class="card-title">{{$item['judul']}}</h5>
                  </div>
                  <p class="card-text">{{substr($item['isi'],0,100)}}....</p>
                  <div class="d-flex">
                      <a href="/blog/{{$item['id']}}" style="margin-right: 15px;" class="btn btn-primary">Baca Artikel</a>
                      @if(Auth::user())
                      <a href="/hapus/{{$item['id']}}" class="btn btn-danger">Hapus Artikel</a>
                      @endif
                  </div>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>

@endsection
