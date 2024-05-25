@extends('layout.sistempakar-layout-form')
@section('title', $kembali)

@section('content')
<h3 class="keterangan">Hasil Pengujian</h3>

<div class="container-fluid">
    <div class="row jurnal">
        @if ($penyakit != null)
        @foreach ($penyakit as $item)
        <h3 class="namapenyakit" style="padding: 10px;">Nama Penyakit : {{$item->nama}}</h3>
        @endforeach
        <div>
            <a style="margin-bottom: 10px" class="btn btn-primary" href="{{$link}}">Jurnal Penyakit</a>
            @foreach ($penjelasan as $item)
            <a style="margin-bottom: 10px" class="btn btn-warning" href="{{$item->link}}">Penjelasan Lengkap</a>
            @endforeach
            <a style="margin-bottom: 10px" class="btn btn-primary" href="{{$kembali}}">Kembali</a>
        </div>
        @else
            <h4 style="padding: 10px;">Nama Penyakit : Tidak ditemukan (Harap mengisi form kembali sesuai gejala anda)</h4>
            <a class="btn btn-primary" style="margin-left:18px; width: 200px;" href="{{$kembali}}">Kembali</a>
        @endif
        
    </div>
</div>

@if ($penyakit != null)
<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        @foreach ($penjelasan as $item)
            
        <div style="background-color: #ffedb8;" class="col-4 menu2">
            <h4>Penjelasan</h4>
            <p>{{$item->penjelasan}}</p>    
        </div>
        <div style="background-color: #b2e1c5;" class="col-4 menu2">
            <h4>Pencegahan</h4>
            <p>{{$item->pencegahan}}</p>    
        </div>
        <div style="background-color: #fecac4;" class="col-4 menu2">
            <h4>Pengobatan</h4>
            <p>{{$item->pengobatan}}</p>    
        </div>
        @endforeach
    </div>
</div>
@else
<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div style="background-color: #ffedb8;" class="col-4 menu2">
            <h4>Penjelasan</h4>
            <p>-</p>
        </div>
        <div style="background-color: #b2e1c5;" class="col-4 menu2">
            <h4>Pencegahan</h4>
            <p>-</p>
        </div>
        <div style="background-color: #fecac4;" class="col-4 menu2">
            <h4>Pengobatan</h4>
            <p>-</p>
        </div>
    </div>
</div>

@endif

@endsection
