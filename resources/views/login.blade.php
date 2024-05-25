<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Health Care - Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="shortcut icon" href="/img/logo-4.png">
</head>
<body>
    <div class="form-login">
        <div style="display: flex; justify-content:center; width:100%;">
            <img src="/img/logo-4.png" alt="">
        </div>
        <h2 style="text-align: center" class="navbar-brand" href="#">HEALTH CARE</h2>
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input name="email" autocomplete="off" required type="email" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Password</label>
                <input name="password" autocomplete="off" required type="password" class="form-control" id="pass">
              </div>
              <div class="login-button" style="width: 100%">
                @if (Session::has('status'))
                     <div class="alert alert-danger" role="alert">
                        {{Session::get('message')}}
                     </div>
                @endif
                <button type="submit" class="btn btn-primary" style="width: 100%; margin-bottom:20px;">
                    Masuk
                </button>
                <a class="btn btn-warning" style="width: 100%" href="/index" >Beranda</a>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>