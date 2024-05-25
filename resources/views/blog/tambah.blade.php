@extends('..layout.blog-layout-form')
@section('title', 'List Artikel')
@section('link', 'index')
@section('menu', 'Beranda')
@section('gambar', 'blog5.jpg')

@section('content')
<h3 class="keterangan">Tambah Blog Kesehatan</h3>
{{-- content --}}

<div class="container-fluid d-flex justify-content-center">
   <div class="formtambah">

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Judul</label>
            <input name="judul" autocomplete="off" required class="form-control" id="exampleFormControlInput1" placeholder="">
        </div>
        <div class="mb-3">
            <label for="pass" class="form-label">Isi</label>
            <textarea name="isi" autocomplete="off" required class="form-control" id="pass" cols="40" rows="10"></textarea>
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input name="gambar" type="file" autocomplete="off" required class="form-control" id="gambar">
        </div>
        <div class="mb-3">
            <label for="link" class="form-label">link</label>
            <input name="link" autocomplete="off" required class="form-control" id="link" placeholder="">
        </div>
            <button type="submit" class="btn btn-primary" style="width: 100%; margin-bottom:20px;">
                Tambah
            </button>
            <a class="btn btn-warning" style="width: 100%" href="/blog" >Kembali</a>
    </form>

   </div>
</div>

@endsection
