<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Giriş Yap</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
    <link href="{{asset('/')}}assets1/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('/')}}assets1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('/')}}assets1/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('/')}}assets1/css/templatemo_style.css" rel="stylesheet" type="text/css">
    <link href="{{asset('/')}}assets2/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets2/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets2/css/flexslider.css" rel="stylesheet">
    <link href="{{asset('/')}}assets2/css/templatemo-style.css" rel="stylesheet">



</head>
<body class="tm-gray-bg">
<!-- Header -->
<div class="tm-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-3 tm-site-name-container">
                <a href="" class="tm-site-name">BenleGez</a>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-9">
                <div class="mobile-menu-icon">
                    <i class="fa fa-bars"></i>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<h1 class="margin-bottom-15">Giriş Yap</h1>
<br>
<br>
<div class="container">
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="col-md-12">
        <form class="form-horizontal templatemo-container templatemo-login-form-1 margin-bottom-30" role="form" action="{{ route('users.login') }}" method="post">
            @csrf
            <div class="form-group">
                <div class="col-xs-12">
                    <div class="control-wrapper">
                        <label for="username" class="control-label fa-label"><i class="fa fa-user"></i></label>
                        <input type="text" class="form-control" id="username" name="nickname" placeholder="Kullanıcı Adınız">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="control-wrapper">
                        <label for="password" class="control-label fa-label"><i class="fa fa-lock"></i></label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Şifreniz">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="checkbox control-wrapper">
                        <label>
                            <input type="checkbox"> Beni Hatırla
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-12">
                    <div class="control-wrapper">
                        <input type="submit" value="Giriş Yap" class="btn btn-info">
                    </div>
                </div>
            </div>
        </form>
        <div class="text-center">
            <a href="{{'register'}}" class="templatemo-create-new">Yeni Hesap Oluştur <i class="fa fa-arrow-circle-o-right"></i></a>
        </div>
    </div>
</div>
<br>
<br>
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
