<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>İletişim</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
    <link href="{{asset('/')}}assets2/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets2/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="{{asset('/')}}assets2/css/flexslider.css" rel="stylesheet">
    <link href="{{asset('/')}}assets2/css/templatemo-style.css" rel="stylesheet">


</head>
<body>
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
                        <li><a href="{{'about'}}">Hakkımızda</a></li>
                        <li><a href="{{'contact'}}" class="active">İLETİŞİM</a></li>
                        <li><a href="{{'login'}}-1">Hesabım</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<!-- Banner -->
<section class="tm-banner">
    <!-- Flexslider -->
    <div class="flexslider flexslider-banner">
        <ul class="slides">
            <li>
                <div class="tm-banner-inner">
                    <h1 class="tm-banner-title">SİZİN <span class="tm-yellow-text">İÇİN</span>UYGUN SEYAHATLER</h1>
                    <p class="tm-banner-subtitle">Özel Seyahat OluŞTUR</p>
                    <a href="#more" class="tm-banner-link">İLETİŞİME GEÇ</a>
                </div>
                <img src="{{asset('/')}}assets2/img/banner-3.jpg" alt="Banner 3" />
            </li>
        </ul>
    </div>
</section>

<!-- gray bg -->
<section class="container tm-home-section-1" id="more">
    <div class="row">
        <!-- slider -->
        <div class="flexslider effect2 effect2-contact tm-contact-box-1">
            <ul class="slides">
                <li>
                    <img src="{{asset('/')}}assets2/img/world-map.png" alt="image" class="contact-image" />
                    <div class="contact-text">
                        <h2 class="slider-title">BİR SORUN MU VAR?</h2>
                        <h3 class="slider-subtitle">Yardımcı Olmaktan Mutluluk Duyarız.</h3>
                        <p class="slider-description">Seyahat etmek için bizi tercih ettiğiniz ve gösterdiğiniz ilgi için teşekkür ederiz. Size en iyi hizmeti sunabilmek ve sorularınızı yanıtlamak adına elimizden geleni yapmaktayız.

                            Eğer herhangi bir sorunuz, öneriniz veya yardım ihtiyacınız varsa, aşağıda belirtilen iletişim formunu doldurun.</p>
                        <div class="slider-social">
                            <a href="#" class="tm-social-icon"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="tm-social-icon"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="tm-social-icon"><i class="fa fa-pinterest"></i></a>
                            <a href="#" class="tm-social-icon"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- white bg -->
<section class="section-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="tm-section-header section-margin-top">
                <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
                <div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">İLETİŞİME GEÇİN</h2></div>
                <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
            </div>
        </div>
        <div class="row">
            <!-- contact form -->
            <form action="#" method="post" class="tm-contact-form">
                <div class="col-lg-12 col-md-12 tm-contact-form-input">
                    <div class="form-group">
                        <input type="text" id="contact_name" class="form-control" placeholder="AD" />
                    </div>
                    <div class="form-group">
                        <input type="email" id="contact_email" class="form-control" placeholder="EMAIL" />
                    </div>
                    <div class="form-group">
                        <input type="text" id="contact_subject" class="form-control" placeholder="KONU" />
                    </div>
                    <div class="form-group">
                        <textarea id="contact_message" class="form-control" rows="6" placeholder="MESAJ"></textarea>
                    </div>
                    <div class="form-group">
                        <button class="tm-submit-btn" type="submit" name="submit">Gönder</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</section>
<footer class="tm-black-bg">
    <div class="container">
        <div class="row">
            <p class="tm-copyright-text">Copyright &copy; 2023 BenleGez</p>
        </div>
    </div>
</footer>
<script type="text/javascript" src="{{asset('/')}}assets2/js/jquery-1.11.2.min.js"></script>      		<!-- jQuery -->
<script type="text/javascript" src="{{asset('/')}}assets2/js/bootstrap.min.js"></script>					<!-- bootstrap js -->
<script type="text/javascript" src="{{asset('/')}}assets2/js/jquery.flexslider-min.js"></script>			<!-- flexslider js -->
<script type="text/javascript" src="{{asset('/')}}assets2/js/templatemo-script.js"></script>      		<!-- Templatemo Script -->
<script>
    /* Google map
      ------------------------------------------------*/
    var map = '';
    var center;

    function initialize() {
        var mapOptions = {
            zoom: 14,
            center: new google.maps.LatLng(37.769725, -122.462154),
            scrollwheel: false
        };

        map = new google.maps.Map(document.getElementById('google-map'),  mapOptions);

        google.maps.event.addDomListener(map, 'idle', function() {
            calculateCenter();
        });

        google.maps.event.addDomListener(window, 'resize', function() {
            map.setCenter(center);
        });
    }

    function calculateCenter() {
        center = map.getCenter();
    }

    function loadGoogleMap(){
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&' + 'callback=initialize';
        document.body.appendChild(script);
    }

    // DOM is ready
    $(function() {

        // https://css-tricks.com/snippets/jquery/smooth-scrolling/
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

        // Flexslider
        $('.flexslider').flexslider({
            controlNav: false,
            directionNav: false
        });

        // Google Map
        loadGoogleMap();
    });
</script>
</body>
</html>
