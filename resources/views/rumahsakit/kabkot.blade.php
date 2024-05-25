@extends('..layout.rumahsakit-layout-form')
@section('title', 'Kabkot')
@section('link', 'provinsi')
@section('menu', 'Provinsi')

@section('content')
<h3 class="keterangan">Pilih Kabupaten/Kota</h3>

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
    
body {
    overflow-x: hidden;
}
h1 {
    font-family: 'Poppins', sans-serif;
    color: white;
}
p {
    font-family: 'Poppins', sans-serif;
    /* color: white; */
    margin-bottom: 30px !important;
}
.isi-header {
    margin: 60px 30px;
}
.beranda {
    font-family: 'Poppins', sans-serif;
    text-decoration: none;
    padding: 15px 70px;
    background-color: white;
    border-radius: 30px; 
}
.keterangan {
    font-family: 'Poppins', sans-serif;
    text-align: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
                -ms-grid-row-align: center;
            align-items: center;
    margin: 30px 0px;
}

.isi {
    width: 100%;
}
.menu img {
    width: 200px;
    position: relative;
    top: -50px;
}
.menu h3 {
    font-family: 'Poppins', sans-serif;
    padding-top: 20px;

}
.footer {
width: 100%;
background-color: #d2dbff;
padding-top: 15px;
}
.menu-footer {
width: 500px;
}
.footer img {
width: 200px;
}
.footer a {
margin: 10px;
text-decoration: none;
color: black;
font-family: 'Poppins', sans-serif; 
}
.footer p {
color: black;
}

.inputan {
margin-bottom: 10px;
background-color: aliceblue;
padding: 10px;
padding-bottom: 10px;
}
.inputan:hover {
background-color: rgb(125, 194, 255);
}

.inputan label {
width:80%;
}

.inputan input { /* IE 9 */
-webkit-transform: scale(2); /* Chrome, Safari, Opera */
transform: scale(2); 
margin-right: 10px;
}

h5 {

font-family: 'Poppins', sans-serif; 
}

.container-fluid h3 {
font-family: 'Poppins', sans-serif; 

}
</style>
<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        @foreach ($response as $item)   
        <div class="col-2 menu ">
            <p><i class="fa-solid fa-city"></i> {{$item['name']}}</p>
            <a class="btn btn-primary" href="/provinsi/{{$idprop}}/rumahsakit/{{$item['id']}}">Pilih Kab/Kota</a>
        </div>
        @endforeach
    </div>
</div>

@endsection
