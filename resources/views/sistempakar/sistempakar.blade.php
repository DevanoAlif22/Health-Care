<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Health Care - Sistem Pakar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo-4.png">
</head>

<style>
    body {
        overflow-x: hidden;
    }
    .bagian-1 {
        padding-bottom: 45px;
        background-image: url('img/bg2.jpg');
        background-position: center;
        background-size: auto;
        width: 100%;
    }
    h1 {
        font-family: 'Poppins', sans-serif;
        color: white;
    }
    p {
        /* font-family: 'Poppins', sans-serif; */
        color: white;
        margin-bottom: 30px;
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

    .menu {
        width: 350px;
        height: 140px;
        background-color: rgb(235, 255, 255);
        margin: 10px;
        border-radius: 10px;
        box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
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
@media (max-width: 400px) {
    .footer a {
        font-size: 0.8em;    
    }
    
}
</style>

<body>
    <div class="container-fluid bagian-1 d-flex">
        <div class="isi-header">
            <h1>SISTEM PAKAR</h1>
            <h1>DIAGNOSA PENYAKIT</h1>
            <p>Pilih menu diagnosa penyakit, isi formulir gejala dan hasil akhir keluar</p>
            <a href="index" class="beranda">Beranda</a>
        </div>
    </div>

    <h3 class="keterangan">Diagnosa Penyakit</h3>

    <div class="container-fluid mb-3">
        <div class="row d-flex justify-content-center">
            @for ($i = 0; $i < count($view); $i++)
                
            <div class="col-3 menu  d-flex justify-content-center">
                <div class="isi">
                    <img src="img/{{$gambar[$i]}}" alt="">
                </div>
                <div class="isi">
                    <h3>{{$ket[$i]}}</h3>
                    <a href="/sistem-pakar/{{$view[$i]}}" class="btn btn-primary">Pilih Diagnosa</a>
                </div>
            </div>
            @endfor
            
        </div>
    </div>

{{-- footer --}}
<div class="footer">
    <div class="row d-flex justify-content-center">
        <div class="menu-footer col-4 d-flex justify-content-center">
            <img src="/img/logo-3.png" alt="">
        </div>
        <div class="menu-footer col-4 d-flex justify-content-center">
            <a href="/index">Beranda</a>
            <a href="/sistem-pakar">Sistem Pakar</a>
            <a href="/provinsi">Rumah Sakit</a>
            <a href="/blog">Blog</a>
        </div>
        <div class="menu-footer col-4 d-flex justify-content-center pt-4">
            <a href="https://wa.me/+62895366141915" style="margin: 0px; padding: 0px;" href=""><i style="margin-right: 10px" class="fa-brands fa-whatsapp fa-xl"></i></a>
            <a style="margin: 0px; padding: 0px;" href=""><i style="margin-right: 10px" class="fa-brands fa-facebook fa-xl"></i></a>
            <a style="margin: 0px; padding: 0px;" href=""><i style="margin-right: 10px" class="fa-solid fa-at fa-xl"></i></i></a>
        </div>
    </div>

    <div class="row pt-4">
        <div class="col-12 d-flex justify-content-center">
            <p> <strong> devanorama123@gmail.com </strong></p>
        </div>
    </div>
</div>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>