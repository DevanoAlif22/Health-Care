@extends('..layout.blog-layout-form')
@section('title', 'List Artikel')
@section('link', 'blog')
@section('menu', 'blog')

<style>
    p {
        line-height: 2;
    }
    img {
        width: 40%;
        padding: 10px;
    }
    
    @media (max-width: 500px) {
        img {
            width: 90%;
            padding: 10px;
        }    
    }
</style>
@foreach ($data as $item)
    
@section('content')
<h3 class="keterangan">{{$item['judul']}}</h3>
<div style="width: 100%; display:flex; justify-content:center;">
    <img src="{{asset('storage/gambar/'.$item['gambar'])}}" alt="">
</div>
<div class="container">
    <p>{!!nl2br($item['isi'])!!}</p>
    <p>Link : {{$item['link']}}</p>
</div>

@endforeach

@endsection
