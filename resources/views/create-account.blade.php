<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hesap Oluştur</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
    <link href="{{asset('/')}}assets2/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets2/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets2/css/flexslider.css" rel="stylesheet">
    <link href="{{asset('/')}}assets2/css/templatemo-style.css" rel="stylesheet">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
    <link href="{{asset('/')}}assets1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('/')}}assets1/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('/')}}assets1/css/templatemo_style.css" rel="stylesheet" type="text/css">

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
                        <li><a href="{{'/'}}">Anasayfa</a></li>
                        <li><a href="{{'about'}}" >Hakkımızda</a></li>
                        <li><a href="{{'contact'}}">İLETİŞİM</a></li>
                        <li><a href="{{'login-1'}}"class="active">Hesabım</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<center><h1 class="margin-bottom-15">Hesap Oluştur</h1></center>
<br>
<br>
<div class="container">
    <div class="col-md-12">
        <form class="form-horizontal templatemo-create-account templatemo-container" role="form" action="#" method="post">
            <div class="form-inner">
                <div class="form-group">
                    <div class="col-md-6">
                        <label for="first_name" class="control-label">Adınız</label>
                        <input type="text" class="form-control" id="first_name" placeholder="">
                    </div>
                    <div class="col-md-6">
                        <label for="last_name" class="control-label">Soyadınız</label>
                        <input type="text" class="form-control" id="last_name" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <label for="username" class="control-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label for="username" class="control-label">Kullanıcı Adınız</label>
                        <input type="text" class="form-control" id="username" placeholder="">
                    </div>
                    <div class="col-md-6 templatemo-radio-group">
                        <label class="radio-inline">
                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1"> Erkek
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Kadın
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <label for="password" class="control-label">Şifreniz</label>
                        <input type="password" class="form-control" id="password" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="submit" value="Hesap Oluştur" class="btn btn-info">
                        <a href="{{'login-1'}}" class="pull-right">Giriş Yap</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
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

