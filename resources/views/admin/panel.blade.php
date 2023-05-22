<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="tr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Paneli</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('/')}}assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('/')}}assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="{{asset('/')}}assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="{{asset('/')}}assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="{{'panel'}}">Admin</a>
            </div>
            <div style="color: white;
                padding: 15px 50px 5px 50px;
                float: right;
                font-size: 16px;">&nbsp; <a href="{{'/'}}" class="btn btn-danger square-btn-adjust">Çıkış Yap</a>
            </div>
        </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="{{asset('/')}}assets/img/find_user.png" class="user-image img-responsive"/>
                </li>
                <li>
                    <a class="active-menu"  href="{{'panel'}}"><i class="fa fa-dashboard fa-3x"></i>Ana Panel</a>
                </li>
                <li>
                    <a  href="{{'ui'}}"><i class="fa fa-user fa-3x"></i>Kullanıcı İşlemleri</a>
                </li>
                <li>
                    <a  href="{{'table'}}"><i class="fa fa-edit fa-3x"></i>Mesajlar</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /. NAV SIDE  -->

    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Admin Paneli</h2>
                    <h5>Hoşgeldin Admin</h5>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr>
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-envelope-o"></i>
                </span>
                        <div class="text-box" >
                            <p class="main-text">120 Yeni</p>
                            <p class="text-muted">Mesaj</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-bars"></i>
                </span>
                        <div class="text-box" >
                            <p class="main-text">30 Görev</p>
                            <p class="text-muted">Geriye kalan</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                        <div class="text-box" >
                            <p class="main-text">240 Yeni</p>
                            <p class="text-muted">Bildirim</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-6">
                    <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-rocket"></i>
                </span>
                        <div class="text-box" >
                            <p class="main-text">3 Diğer</p>
                            <p class="text-muted">İşlem</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /. ROW  -->
            <hr>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="panel back-dash">
                        <i class="fa fa-dashboard fa-3x"></i><strong> &nbsp; HIZ</strong>
                        <p class="text-muted">SİTE HIZI SONUÇLARI <br> Mobil: %91 <br>Bilgisayar:%96</p>
                    </div>

                </div>
                <div class="col-md-3 col-sm-12 col-xs-12 ">
                    <div class="panel ">
                        <div class="main-temp-back">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-xs-6"> <i class="fa fa-cloud fa-3x"></i> BİNGÖL</div>
                                    <div class="col-xs-6">
                                        <div class="text-temp"> 25° </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-desktop"></i>
                </span>
                        <div class="text-box" >
                            <p class="main-text">Ekran</p>
                            <p class="text-muted">İyi Görünüyor</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </body>
</html>
