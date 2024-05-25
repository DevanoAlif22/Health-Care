@extends('..layout.rumahsakit-layout-form')
@section('title', 'Provinsi')
@section('link', 'index')
@section('menu', 'Beranda')

@section('content')
<h3 class="keterangan">Pilih Provinsi Di Indonesia</h3>

{{-- content --}}

<style>
    .menu {
    width: 200px !important;
    padding-bottom: 10px;
    background-color: rgb(247, 255, 164);
    border-radius: 10px;
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    margin: 10px;
    padding: 10px; 
    }
</style>

<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        @foreach ($response as $item)   
        <div class="col-2 menu ">
            <p><i class="fa-solid fa-city"></i> {{$item['name']}}</p>
            <a class="btn btn-primary" href="provinsi/{{$item['id']}}">Pilih Provinsi</a>
        </div>
        @endforeach
    </div>
</div>

@endsection
