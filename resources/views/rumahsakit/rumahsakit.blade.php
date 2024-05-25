@extends('..layout.rumahsakit-layout-form')
@section('title', 'Kabkot')
@section('link', 'provinsi')
@section('menu', 'Provinsi')

@section('content')
<h3 class="keterangan">Data rumah sakit yang tersedia</h3>

{{-- content --}}
<div style="max-width: 1500px; overflow-y:hidden; overflow-x:scroll;">
<table class="table table-striped table-hover table-border" style=" text-align:center; align-items:center;">
    <thead style="background-color:#0a4b69;">
        <tr>
          <th style="color: white" scope="col">N0</th>
          <th style="color: white" scope="col">Nama</th>
          <th style="color: white" scope="col">Nomor</th>
          <th style="color: white" scope="col">Alamat</th>
          <th style="color: white" scope="col">Tersedia</th> 
          <th style="color: white" scope="col">Nama Kamar</th>
          <th style="color: white" scope="col">Info</th>
        </tr>
    </thead>

    <tbody>
    @if (count($response) > 0)
    @php
        $i = 1;
    @endphp
    @foreach ($response as $item)
    <tr scope="row">
        <td>{{$i}}</td>
        <td>{{$item['name']}}</td>
        <td>{{$item['phone']}}</td>
        <td>{{$item['address']}}</td>

        @foreach ($item['available_beds'] as $item)
          <td>{{$item['available']}}</td>
          <td>{{$item['room_name']}}</td>    
          <td>{{$item['info']}}</td>    
        @endforeach
    </tr>
    @php
        $i++;
    @endphp
    @endforeach
        
    @else
        <p>Ketersediaan Rumah sakit tidak ada untuk saat ini, cek secara berkala</p>
    @endif
    </tbody>
  </table>
</div>
@endsection
