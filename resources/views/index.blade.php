<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Health Care - Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="img/logo-4.png">
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
</head>

<style>

* {
    padding:0px;
    margin:0px;
}

body {
    overflow-x: hidden; 
}

.nav {
    max-width: 750px !important;
    padding: 5px 30px;
}

.nav-info {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify !important;
        -ms-flex-pack: justify !important;
            justify-content: space-between !important;
    padding: 5px 30px;
    width: 100%;
}

.nav-utama {
    background-color: rgb(255, 255, 255);
}
.bagian-1 {
    background-image: url('img/bg-2.png');
    background-position: center;
    background-size: auto;
    height: 70vh;
}
.nav img {
    width: 200px;
}
.nav-info h4 {
    cursor: pointer;
    padding: 5px 10px;
    border-radius: 10px; 
    font-family: 'Poppins', sans-serif;
    
}
.nav-info h4:hover {
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    color: #1c3dbe;
}
.nav-info a {
    cursor: pointer;
    padding: 5px 10px;
    border-radius: 10px; 
    font-family: 'Poppins', sans-serif;
    
}
.nav-info a:hover {
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    color: #1c3dbe;
}
.datang {
    width: 550px;
    height: 400px;
    /* background-color: antiquewhite; */
    margin: 100px 60px;
}
.datang h1 {
    font-family: 'Poppins', sans-serif;
    color:white;
    font-size: 3.5em;
    font-weight: 300;
    font-height:100px;
    text-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
}
@-webkit-keyframes animasi-ketik{
  from { width: 0; }
}
@keyframes animasi-ketik{
  from { width: 0; }
}
.datang h1 span {
color: #1c3dbe;
-webkit-animation: animasi-ketik 5s steps(70, end);
        animation: animasi-ketik 5s steps(70, end);
}
.garis {
    max-width: 200px;
    height: 5px;
    background-color: white;
    margin-bottom: 30px;
}
.garis2 {
    max-width: 200px;
    height: 3px;
    background-color: rgb(0, 0, 0);
}
.tentang {
    padding: 15px 70px;
    font-family: 'Poppins', sans-serif;
    background-color: white;
    border-radius: 30px; 
    text-decoration: none;
}

.menu {
    width: 300px;
    height: 200px;
    background-color: rgb(255, 255, 255);
    margin: 20px;
    border-radius: 15px; 
    box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
}
.menu2 {
    width: 650px;
    height: 400px;
}

.bagian-2 {
    position: relative;
    top: -100px;
}

.bagian-2 img {
    width: 80px;
}

.bagian-2 h4 {
    color: black;
    text-decoration: none;
    font-family: 'Poppins', sans-serif;   
}

.bagian-3 {
    width: 90%;
    margin-bottom: 30px;
    border: 1px solid  #1c3dbe;
    border-radius: 5px;
    background-color: aliceblue;
    box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
}
.animasi {
    width: 500px;
}
.pembahasan {
    width: 100%;
    height: 400px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
}
.isi {
    margin: auto;
    width:75% ;
}
.carousel-control-prev-icon {
    background-image: url("img/left-arrow.png") !important;
    
}

.carousel-control-next-icon {
    background-image: url("img/right-arrow.png") !important;
  /* background-image: url("data:image/svg+xml;ch?arset=utf8,%3Csvg xmlns='http://www.w3.org/2000/svg' fill='%23fff' viewBox='0 0 8 8'%3E%3Cpath d='M2.75 0l-1.5 1.5 2.5 2.5-2.5 2.5 1.5 1.5 4-4-4-4z'/%3E%3C/svg%3E") !important; */
}

h2 {
    font-family: 'Poppins', sans-serif; 
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

@media (max-width: 500px) {
    .datang {
        /* background-color: antiquewhite; */
        margin: 45px 60px;
    }
}
@media (max-width: 400px) {
.datang {
    /* background-color: antiquewhite; */
    width: 700px;
    margin: 10px;
    padding-top: 40px;

}
.footer a {
    font-size: 0.8em;    
}
.datang h1 {
    font-size: 2em;
    /* color: aqua; */
    font-weight: 100;
    font-height:50px;
}

.nav-info h4 {
        font-size: 0.8em;
        padding: 0px;    
    }
.nav-info a {
        font-size: 0.8em;
        padding: 0px;    
    }
}
</style>

<body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg nav-utama">
        <div class="container-fluid nav">
          <a class="navbar-brand" href="#"><img src="img/logo-3.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <div class="d-flex nav-info" role="search">
                  <h4 class="sistempakar nava nav-link">Sistem Pakar</h4>
                  <h4 class="rumahsakit nava nav-link">Rumah Sakit</h4>
                  <h4 class="blog nava nav-link">Blog</h4>
                  @if (!Auth::user())
                  <a href="/login" class="nava nav-link">Masuk</a>                      
                  @else
                  <a href="/logout" class="nava nav-link">Logout</a>                      
                  @endif
                </div>
            </div>
      </nav>
    <!-- end navbar -->
    
    <div class="container-fluid bagian-1 d-flex flex-row-reverse">
        <div class="datang">
            <h1>SELAMAT DATANG</h1>
            <h1>DI <span style="color:#1c3dbe;"> HEALTH CARE </span></h1>
            <div class="garis"></div>
            <a href="/tentang" class="tentang">Tentang Kita</a>
        </div>
    </div>

<div class="container-fluid bagian-2">
    <div class="row d-flex justify-content-center">
        <div class="menu col-3">
            <img src="img/icon-1.png" alt="">
            <div class="garis2"></div>
            <h4>Sistem Pakar</h4>
            <h6>Diagnosa Penyakit</h6>
            <a href="/sistem-pakar" class="btn btn-primary">Masuk Halaman</a>
        </div>
       
        <div class="menu col-3">
            <img src="img/icon-2.png" alt="">
            <div class="garis2"></div>
            <h4>Rumah sakit</h4>
            <h6>Cek ketersediaan kamar</h6>
            <a href="/provinsi" class="btn btn-primary">Masuk Halaman</a>
        </div>
       
        <div class="menu col-3">
            <img src="img/icon-3.png" alt="">
            <div class="garis2"></div>
            <h4>Blog Kesehatan</h4>
            <h6>Berisi artikel peduli kesehatan</h6>
            <a href="/blog" class="btn btn-primary">Masuk Halaman</a>
        </div>
       
        <div class="menu col-3">
            <img src="img/icon-4.png" alt="">
            <div class="garis2"></div>
            <h4>Hasil Analisa</h4>
            <h6>Berisi jurnal Sistem Pakar</h6>
            <a href="https://drive.google.com/drive/folders/1oVzhfywPiORC08ukEgVPXngwKfh8tDjz?usp=sharing" class="btn btn-primary">Masuk Halaman</a>
        </div>
       
    </div>
    {{-- <h2 style="align-items: center; text-align:center;">Penjelasan</h2> --}}
</div>

<h2 style="text-align: center; align-items:center;">Penjelasan Fitur Health Care</h2>

{{-- sistem pakar --}}
<div class="container-fluid bagian-3" id="sistempakar">
    <div class="row d-flex justify-content-center">
        <div class="menu2 col-md-6 d-flex justify-content-center">
            <lottie-player src="https://assets2.lottiefiles.com/packages/lf20_l13zwx3i.json"  background="transparent"  speed="1" class="animasi"  loop autoplay></lottie-player>
        </div>
       
        <div class="menu2 col-md-6">
            
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                   <div class="pembahasan">
                        <div class="isi">
                            <h2>Sistem Pakar</h2>
                            <p>Sistem pakar adalah suatu sistem komputer yang bisa menyamai atau meniru kemampuan seorang pakar. Pakar yang dimaksud disini ialah orang yang mempunyai keahlian khusus yang dapat menyelesaikan masalah yang tidak dapat diselesaikan orang awam. Contohnya dokter, mekanik, psikolog dan lain-lain.</p>
                         </div>
                    </div>
                </div>
                  <div class="carousel-item">
                      <div class="pembahasan">
                       <div class="isi">
                           <h2>Diagnosa Penyakit</h2>
                           <p>Sistem ini bekerja dengan mengumpulkan data tentang gejala-gejala yang dirasakan oleh pasien, melakukan analisis dan pemrosesan data, dan membandingkan data tersebut dengan basis pengetahuan tentang berbagai macam penyakit. Setelah itu, sistem akan memberikan hasil diagnosa yang sesuai dengan gejala-gejala yang dirasakan oleh pasien</p>
                       </div>
                       
                    </div>
                </div>
                  <div class="carousel-item">
                   <div class="pembahasan">
                       <div class="isi">
                           <h2>Fitur Diagnosa</h2>
                           <p>Semua data yang kami analisa dan proses pada sistem kami baik tentang gejala,penyakit dan keputusan tindakan semua kami ambil dari jurnal-jurnal yang terpercaya</p>
                           <p>Kelebihan: Akurasi diagnosa yang tinggi,Meningkatkan efisiensi waktu dan biaya,Tersedia 24 jam,Menjadi panduan untuk masyarakat</p>
                           <p>Kekurangan: Tidak dapat menggantikan peran dokter,Tidak mengambil faktor emosi pasien,Basis pengetahuan yang terbatas,Ketergantungan pada teknologi</p>
                        </div>
                      </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" style="color: black;" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

        </div>
       
    </div>
</div>


{{-- rumah sakit --}}
<div class="container-fluid bagian-3" id="rumahsakit">
    <div class="row d-flex justify-content-center">
       
       
        <div class="menu2 col-6">
            <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                   <div class="pembahasan">
                        <div class="isi">
                            <h2>Rumah Sakit</h2>
                            <p>Fitur ini menampilkan ketersediaan rumah sakit dan tempat tidur rumah sakit untuk pasien covid-19 ataupun non-covid yang berada di Indonesia</p>
                            <p>Fitur ini mungkin terjadi kesalahan dikarenakan data pusat sering terjadi perubahan, jika menemukan kesalahan, silakan lapor ke kontak kami</p>
                        </div>
                    </div>
                </div>
                  <div class="carousel-item">
                      <div class="pembahasan">
                       <div class="isi">
                           <h2>API Ketersediaan</h2>
                           <p>API ini bertujuan untuk menampilkan data-data ketersediaan rumah sakit yang berada di Indonesia, selain itu API ini juga menampilkan daftar rumah sakit yang berada di seluruh Indonesia.</p>
                           <p>Semua data kami ambil di public API https://github.com/satyawikananda/rs-bed-covid-indo-api</p>
                       </div>
                       
                    </div>
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" style="color: black;" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

        </div>

        <div class="menu2 col-6 d-flex justify-content-center">
            <lottie-player src="https://assets2.lottiefiles.com/private_files/lf30_YaAfGA.json"  background="transparent"  speed="1" class="animasi"  loop autoplay></lottie-player>
        </div>
       
    </div>
</div>


{{-- blog kesehatan --}}
<div class="container-fluid bagian-3" id="blog">
    <div class="row d-flex justify-content-center">
        <div class="menu2 col-6 d-flex justify-content-center">
            <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_mp6wwkvx.json"  background="transparent"  speed="1" class="animasi"  loop autoplay></lottie-player>
        </div>
       
        <div class="menu2 col-6">
            
            <div id="carouselExampleIndicators3" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                   <div class="pembahasan">
                        <div class="isi">
                            <h2>Blog Kesehatan</h2>
                            <p>Berisi artikel-artikel tentang kesehatan dan gaya hidup sehat. Website ini ditujukan untuk membantu meningkatkan kesadaran masyarakat akan pentingnya menjaga kesehatan dan memberikan informasi dan saran yang berguna untuk menjaga kesehatan secara umum.</p>
                        </div>
                    </div>
                </div>
                  <div class="carousel-item">
                      <div class="pembahasan">
                       <div class="isi">
                           <h2>Kelebihan Fitur</h2>
                            <p>Kelebihan: Meningkatkan kesadaran masyarakat akan kesehatan,Menyediakan informasi yang berguna,Mudah diakses, dan Dapat memberikan solusi atas masalah kesehatan</p>
                        </div>
                       
                    </div>
                </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" style="color: black;" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>

        </div>
       
    </div>
</div>


{{-- footer --}}
<div class="footer">
    <div class="row d-flex justify-content-center">
        <div class="menu-footer col-4 d-flex justify-content-center">
            <img src="img/logo-3.png" alt="">
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
    <script src="/javascript/script.js"></script>
</body>
</html>