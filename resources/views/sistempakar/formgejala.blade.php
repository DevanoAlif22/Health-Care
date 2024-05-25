@extends('..layout.sistempakar-layout-form')
@section('title', $nama)

@section('content')
<h3 class="keterangan">Formulir Diagnosa Penyakit {{$nama}}</h3>


    {{-- formulir --}}
    
        <form action="" method="post">
        @csrf
        @php
         $i = 1;   
        @endphp
        @foreach ($gejala as $item)
        <label for="{{$item->kode}}"  class="inputan" style="width: 100%; display:flex; justify-content:space-between">
            <label style="width: 80%;" for="{{$item->kode}}">{{$i}}. {{$item->nama}}</label>
            <div style="width: 70px; display:flex; justify-content:space-between;">
            <h5 style="color: rgb(0, 81, 255);">YA</h5>
            <input id="{{$item->kode}}" type="radio" name="{{$item->kode}}"  value="{{$item->kode}}">
            </div>
        </label>
        @php
         $i++;   
        @endphp
        @endforeach
        {{-- <input type="text" name="coba"> --}}
        <button type="submit" class="btn btn-primary" style="width: 100%; height:50px; margin-bottom: 10px;">Cek Diagnosa</button>
        <a href="{{strtolower($nama)}}" class="btn btn-warning" style="width: 100%; height:50px;">Mulai ulang formulir</a>
        
    </form>


    @endsection
