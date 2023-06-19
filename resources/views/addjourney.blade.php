<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Anasayfa</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
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
                <a href="#" class="tm-site-name">BenleGez</a>
            </div>
            <div class="col-lg-6 col-md-8 col-sm-9">
                <div class="mobile-menu-icon">
                    <i class="fa fa-bars"></i>
                </div>
                <nav class="tm-nav">
                    <ul>
                        <li><a href="{{'home'}}" >Anasayfa</a></li>
                        <li><a href="{{'account'}}">hesap BİLGİLERİM</a></li>
                        <li><a href="{{'addjourney'}}"class="active">YOLCULUK EKLE</a></li>

                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<center>
    <h1>YOLCULUK EKLE</h1>
</center>

<br>
<br>
<br>
<br>
<br>
<br>
<br>

<!-- gray bg -->
<div class="container tm-home-section-1" id="more">
    <div class="row">
        <div class="col-md-12">
            <!-- Nav tabs -->
            <div class="tm-home-box-1">
                <ul class="nav nav-tabs tm-white-bg" role="tablist" id="hotelCarTabs">
                    <li role="presentation" class="active">
                        <a href="#hotel" aria-controls="hotel" role="tab" data-toggle="tab">TEK YÖN</a>
                    </li>
                    <li role="presentation">
                        <a href="#car" aria-controls="car" role="tab" data-toggle="tab">GİDİŞ -DÖNÜŞ</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active tm-white-bg" id="hotel">
                        <div class="tm-search-box effect2">
                            <form action="arama-sayfasi.html" method="post" class="hotel-search-form">
                                <div class="tm-form-inner">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option value="">-- Nereden -- </option>
                                            <option value="istanbul">İstanbul</option>
                                            <option value="ankara">Ankara</option>
                                            <option value="imzir">İzmir</option>
                                            <option value="elazig">Elazığ</option>
                                            <option value="bingol">Bingöl</option>
                                        </select>
                                    </div>
                                    <div class="form-group margin-bottom-0">
                                        <select class="form-control">
                                            <option value="">-- Nereye -- </option>
                                            <option value="istanbul">İstanbul</option>
                                            <option value="ankara">Ankara</option>
                                            <option value="imzir">İzmir</option>
                                            <option value="elazig">Elazığ</option>
                                            <option value="bingol">Bingöl</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="form-control" placeholder="Gidiş Tarihi" />
                                            <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class='input-group date-time' id='datetimepicker4'>
                                        <input type='number' class="form-control" placeholder="Saat" />
                                        <span class="input-group-addon">
                                                <span class="fa fa-clock-o"></span>
                                            </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class='input-group date-time' id='datetimepicker4'>
                                        <input type='number' class="form-control" placeholder="Fiyat" />
                                        <span class="input-group-addon">
                                                <span class="fa fa-money"></span>
                                            </span>
                                    </div>
                                </div>
                                <div class="form-group tm-yellow-gradient-bg text-center">
                                    <button type="submit" name="submit" class="tm-yellow-btn">Yolculuk Ekle</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade tm-white-bg" id="car">
                        <div class="tm-search-box effect2">
                            <form action="#" method="post" class="hotel-search-form">
                                <div class="tm-form-inner">
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option value="">-- Nereden -- </option>
                                            <option value="istanbul">İstanbul</option>
                                            <option value="ankara">Ankara</option>
                                            <option value="imzir">İzmir</option>
                                            <option value="elazig">Elazığ</option>
                                            <option value="bingol">Bingöl</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option value="">-- Nereye -- </option>
                                            <option value="istanbul">İstanbul</option>
                                            <option value="ankara">Ankara</option>
                                            <option value="imzir">İzmir</option>
                                            <option value="elazig">Elazığ</option>
                                            <option value="bingol">Bingöl</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class='input-group date-time' id='datetimepicker3'>
                                            <input type='text' class="form-control" placeholder="Gidiş Tarihi" />
                                            <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class='input-group date-time' id='datetimepicker4'>
                                            <input type='text' class="form-control" placeholder="Dönüş Tarihi" />
                                            <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class='input-group date-time' id='datetimepicker4'>
                                            <input type='number' class="form-control" placeholder="Saat" />
                                            <span class="input-group-addon">
							                        <span class="fa fa-clock-o"></span>
							                    </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class='input-group date-time' id='datetimepicker4'>
                                            <input type='number' class="form-control" placeholder="Fiyat" />
                                            <span class="input-group-addon">
							                        <span class="fa fa-money"></span>
							                    </span>
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group tm-yellow-gradient-bg text-center">
                                    <button type="submit" name="submit" class="tm-yellow-btn">Yolculuk Ekle</button>
                                </div>
                            </form>
                        </div>
                    </div>
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
        <br>


        <footer class="tm-black-bg">
            <div class="container">
                <div class="row">
                    <p class="tm-copyright-text">Copyright &copy; 2023 BenleGez</p>
                </div>
            </div>
        </footer>
        <script type="text/javascript" src="{{}}assets2/js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="assets2/js/moment.js"></script>
        <script type="text/javascript" src="assets2/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets2/js/bootstrap-datetimepicker.min.js"></script>
        <script type="text/javascript" src="assets2/js/jquery.flexslider-min.js"></script>

        <script type="text/javascript" src="assets2/js/templatemo-script.js"></script>
        <script>

            $(function() {

                $('#hotelCarTabs a').click(function (e) {
                    e.preventDefault()
                    $(this).tab('show')
                })

                $('.date').datetimepicker({
                    format: 'MM/DD/YYYY'
                });
                $('.date-time').datetimepicker();


                $('a[href*=#]:not([href=#])').click(function() {
                    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                        if (target.length) {
                            $('html,body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                });
            });

            // Load Flexslider when everything is loaded.
            $(window).load(function() {
                // Vimeo API nonsense

                /*
                              var player = document.getElementById('player_1');
                              $f(player).addEvent('ready', ready);

                              function addEvent(element, eventName, callback) {
                                if (element.addEventListener) {
                                  element.addEventListener(eventName, callback, false)
                                } else {
                                  element.attachEvent(eventName, callback, false);
                                }
                              }

                              function ready(player_id) {
                                var froogaloop = $f(player_id);
                                froogaloop.addEvent('play', function(data) {
                                  $('.flexslider').flexslider("pause");
                                });
                                froogaloop.addEvent('pause', function(data) {
                                  $('.flexslider').flexslider("play");
                                });
                              }
                */



                // Call fitVid before FlexSlider initializes, so the proper initial height can be retrieved.
                /*

                              $(".flexslider")
                                .fitVids()
                                .flexslider({
                                  animation: "slide",
                                  useCSS: false,
                                  animationLoop: false,
                                  smoothHeight: true,
                                  controlNav: false,
                                  before: function(slider){
                                    $f(player).api('pause');
                                  }
                              });
                */




//	For images only
                $('.flexslider').flexslider({
                    controlNav: false
                });


            });
        </script>
    </div>
    </div>
</body>
</html>
