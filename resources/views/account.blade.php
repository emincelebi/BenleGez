<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hesabım</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('/') }}assets2/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets2/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets2/css/flexslider.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets2/css/templatemo-style.css" rel="stylesheet">
</head>
<body class="tm-gray-bg">
<!-- Header -->
<div class="tm-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
                <a href="#" class="tm-site-name">BenleGez</a>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-9">
                <div class="mobile-menu-icon">
                    <i class="fa fa-bars"></i>
                </div>
                <nav class="tm-nav">
                    <ul>
                        <li><a href="{{ url('home') }}">Anasayfa</a></li>
                        <li><a href="{{ url('account') }}" class="active">HESAP BİLGİLERİM</a></li>
                        <li><a href="{{ url('addjourney') }}">YOLCULUK EKLE</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<center>
    <h1>HESABIM</h1>
</center>

<br>
<br>
<br>
<center>
        <table class="table col-md-6">
            <thead>
            <tr>
                <th scope="col">İsim</th>
                <th>
                    {{ auth()->user()->name }}
                </th>
            </tr>
            <tr>
                <th scope="col">Soyismim</th>
                <th>
                    {{ auth()->user()->surname }}
                </th>
            </tr>
            <tr>
                <th scope="col">Kullanıcı Adım</th>
                <th>
                    {{ auth()->user()->nickname }}
                </th>
            </tr>
            <tr>
                <th scope="col">E posta</th>
                <th>
                    {{ auth()->user()->email }}
                </th>
            </tr>
            <tr>
                <th scope="col">Şifre</th>
                <th>
                    *************
                </th>
            </tr>
            <tr>
                <th scope="col">Araç Markası</th>
                <th>
                    Mercedes
                </th>
            </tr>
            <tr>
                <th scope="col">Yaptığım Seyahat Sayısı</th>
                <th>
                    8
                </th>
            </tr>
            </thead>
        </table>
</center>
<br>
<br>
<center>
    <button type="button" class="btn btn-danger"><a href="{{ route('user.logout') }}">ÇIKIŞ</a></button>
    <button type="button" class="btn btn-success">Hesabı Düzenle</button>
    <button type="button" class="btn btn-danger">Hesabı Sil</button>
</center>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<footer class="tm-black-bg">
    <div class="container">
        <div class="row">
            <p class="tm-copyright-text">Copyright &copy; 2023 BenleGez</p>
        </div>
    </div>
</footer>
</body>
</html>



