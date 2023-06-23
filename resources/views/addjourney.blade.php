<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Yolculuk Ekle</title>

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
            <div class="tm-home-box-1">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active tm-white-bg" id="hotel">
                        <div class="tm-search-box effect2">
                            <form action="{{ route('advert.store') }}" method="POST" class="hotel-search-form">
                                @csrf
                                <div class="tm-form-inner">
                                    <div class="form-group">
                                        <select id="city" name="fromwhere" class="form-control" required>
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->name }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group margin-bottom-0">
                                        <select id="city" name="towhere" class="form-control" required>
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->name }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="form-control" name="when" placeholder="Gidiş Tarihi" required />
                                            <span class="input-group-addon">
                                                <span class="fa fa-calendar"></span>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="car">Araç</label>
                                        <select id="car" name="car" class="form-control" required>
                                            @foreach ($cars as $car)
                                                <option value="{{ $car->name }}" {{ auth()->user()->car === $car->name ? 'selected' : '' }}>
                                                    {{ $car->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class='input-group'>
                                            <input type='number' class="form-control" name="price" placeholder="Fiyat" required />
                                            <span class="input-group-addon">
                                                <span class="fa fa-money"></span>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group tm-yellow-gradient-bg text-center">
                                        <button type="submit" name="submit" class="tm-yellow-btn">Yolculuk Ekle</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#datetimepicker1').datetimepicker({
                    format: 'DD-MM-YYYY',
                    minDate: moment().startOf('day'),
                    useCurrent: false
                });
                $('form.hotel-search-form').on('submit', function(event) {
                    var priceInput = $('input[name="price"]');
                    var priceValue = parseFloat(priceInput.val());

                    if (priceValue < 0) {
                        event.preventDefault();
                        alert("Lütfen geçerli bir fiyat giriniz.");
                    }
                });
            });
        </script>

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
