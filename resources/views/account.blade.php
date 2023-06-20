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
    <style>
        .profile-image {
            border-radius: 50%;
            width: 200px;
            height: 200px;
            object-fit: cover;
        }
        .full-name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .nickname {
            font-size: 18px;
        }
    </style>
    <script>
        function deleteAccount() {

            var confirmation = confirm("Hesabınızı silmek istediğinize emin misiniz?");

            if (confirmation) {

                window.location.href = '{{ route("delete-account") }}';
            }
        }
    </script>

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

<!-- ... -->
<br>
<br>
<center>
    <h1>HESABIM</h1>
</center>

<br>
<br>
<br>
<div class="text-left">
    <div class="full-name">{{ auth()->user()->name }} {{ auth()->user()->surname }}</div>
    <div class="nickname">{{ auth()->user()->nickname }}</div>
</div>
<br>
<br>
<center>
    <table class="table col-md-6">
        <thead>
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
            <th scope="col">Cinsiyet</th>
            <th>
                {{auth()->user()->gender}}
            </th>
        </tr>
        <tr>
            <th scope="col">Araç Markası</th>
            <th>
                {{auth()->user()->car ?? "-"}}
            </th>
        </tr>
        <tr>
            <th scope="col">Yaptığım Seyahat Sayısı</th>
            <th>
                {{auth()->user()->travelCount}}
            </th>
        </tr>
        </thead>
    </table>
</center>
<br>
<br>
<center>
    <button type="button" class="btn btn-danger"><a href="{{ route('user.logout') }}">ÇIKIŞ</a></button>
    <button type="button" class="btn btn-success" onclick="location.href='{{ route('edit-account') }}'">Hesabı Düzenle</button>
    <button type="button" class="btn btn-danger" onclick="deleteAccount()">Hesabı Sil</button></center>
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



