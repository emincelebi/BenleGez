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
    <style>
        .table-container {
            background-color: #f5f5f5;
            color: #333;
            padding: 10px;
            border-radius: 4px;
            width: 80%;
            margin: 0 auto;
        }


        .table-title {
            font-size: 24px;
            margin-bottom: 10px;
            color: #555;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
        }

        .table-row {
            display: flex;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .table-cell {
            flex: 1;
            padding: 10px;
        }

        .table-cell p {
            margin: 0;
        }

        .action-button {
            display: inline-block;
            padding: 6px 12px;
            background-color: #555;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }
        .table-space {
            height: 10px; /* Boşluk yüksekliği */
        }
        .comments {
            margin-top: 10px;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 4px;
        }


    </style>

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
                        <li><a href="{{'home'}}" class="active">Anasayfa</a></li>
                        <li><a href="{{'about'}}">Hakkımızda</a></li>
                        <li><a href="{{'contact'}}">İLETİŞİM</a></li>
                        <li><a href="{{'account'}}">Hesabım</a>
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
                    <h1 class="tm-banner-title">Yenİ   <span class="tm-yellow-text">ArkadaŞlıklar </span>Kurun</h1>
                    <p class="tm-banner-subtitle">Bİrlİkte YolculuĞun Keyfİnİ KeŞfedİn</p>
                    <a href="#more" class="tm-banner-link">Daha Fazla</a>
                </div>
                <img src="{{asset('/')}}assets2/img/banner-2.jpg" alt="Image" />
            </li>
            <li>
                <div class="tm-banner-inner">
                    <h1 class="tm-banner-title">KarŞılıklı <span class="tm-yellow-text">Kazanç</span> SaĞlayın</h1>
                    <p class="tm-banner-subtitle">Yolculuklarınızı Ekonomİk ve Çevre Dostu Hale Getİrİn</p>
                    <a href="#more" class="tm-banner-link">Daha Fazla</a>
                </div>
                <img src="{{asset('/')}}assets2/img/banner-3.jpg" alt="Image" />
            </li>
            <li>
                <div class="tm-banner-inner">
                    <h1 class="tm-banner-title">En <span class="tm-yellow-text">İyİ TEKLİFİ</span>Bul</h1>
                    <p class="tm-banner-subtitle">Uygun Fİyatlarla GÜvenlİ Yolculuklar</p>
                    <a href="#more" class="tm-banner-link">Daha Fazla</a>
                </div>
                <img src="{{asset('/')}}assets2/img/banner-1.jpg" alt="Image" />
            </li>
        </ul>
    </div>
</section>

<!-- gray bg -->
<section class="container tm-home-section-1" id="more">
    <div class="row">
        <div class="col-md-12">
            <!-- Nav tabs -->
            <div class="tm-home-box-1">
                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade in active tm-white-bg" id="hotel">
                        <div class="tm-search-box effect2">
                            <form action="{{ route('index.store') }}" method="post" class="hotel-search-form">
                            <div class="tm-form-inner">
                                <select id="city" name="fromwhere" class="form-control" required>
                                    @foreach ($cities as $city)
                                        <option value="{{ $city->name }}">{{ $city->name }}</option>
                                    @endforeach
                                </select>
                                    <br>
                                    <div class="form-group margin-bottom-0">
                                        <select id="city" name="towhere" class="form-control" required>
                                            @foreach ($cities as $city)
                                                <option value="{{ $city->name }}">{{ $city->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <div class='input-group date' id='datetimepicker1'>
                                            <input type='text' class="form-control" id="departureDate" placeholder="Gidiş Tarihi" />
                                            <span class="input-group-addon">
							                        <span class="fa fa-calendar"></span>
							                    </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group tm-yellow-gradient-bg text-center">
                                    <button type="submit" name="submit" class="tm-yellow-btn">Yolculuk Ara</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<div class="table-container">
    <h2 class="table-title">İlanlar</h2>
    <table class="table">
        <tbody>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "benlegez";

        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "SELECT * FROM advert";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $advertId = $row['id'];
                echo "<div class='table-row'>";
                echo "<div class='table-cell'>";
                echo "<p>" . $row['fromwhere'] . " - " . $row['towhere'] . "</p>";
                echo "<p>" . $row['when'] . "</p>";
                echo "</div>";
                echo "<div class='table-cell'>";
                echo "<p>" . $row['car'] . "</p>";
                echo "</div>";
                echo "<div class='table-cell'>";
                echo "<p>" . $row['price'] . "</p>";
                echo "</div>";
                echo "<div class='table-cell'>";
                echo "<p>" . $row['nickname'] . "</p>";
                echo "</div>";
                echo "<div class='table-cell'>";
                echo "<button class='action-button' onclick='showComments($advertId)'>Yorumları Gör</button>";
                echo "</div>";
                echo "</div>";
                echo "<div id='comments-$advertId' class='comments'></div>";
                echo "<div class='table-space'></div>";
            }
        }
        $conn->close();
        ?>
        </tbody>
    </table>
</div>

<br>
<br>
<br>
<br>

<!-- white bg -->
<section class="tm-white-bg section-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="tm-section-header section-margin-top">
                <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
                <div class="col-lg-4 col-md-6 col-sm-6"><h2 class="tm-section-title">BenleGez Yorumları</h2></div>
                <div class="col-lg-4 col-md-3 col-sm-3"><hr></div>
            </div>
            <div class="col-lg-6">
                <div class="tm-home-box-3">
                    <div class="tm-home-box-3-img-container">
                        <img src="{{asset('/')}}assets2/img/index-07.jpg" alt="image" class="img-responsive">
                    </div>
                    <div class="tm-home-box-3-info">
                        <p class="tm-home-box-3-description">BenleGez, seyahat etmek isteyenler için ekonomik ve güvenli bir seçenek olmanın yanı sıra, yeni dostluklar ve unutulmaz deneyimler sunuyor.</p>
                        <div class="tm-home-box-2-container">
                            <a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
                            <a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description box-3">Seyahat</span></a>
                            <a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="tm-home-box-3">
                    <div class="tm-home-box-3-img-container">
                        <img src="{{asset('/')}}assets2/img/index-08.jpg" alt="image" class="img-responsive">
                    </div>
                    <div class="tm-home-box-3-info">
                        <p class="tm-home-box-3-description">BenleGez, seyahat etmek isteyenlerin masraflarını düşürmek ve yolculuklarını daha sosyal hale getirmek için harika bir platform.</p>
                        <div class="tm-home-box-2-container">
                            <a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
                            <a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description box-3">Seyahat</span></a>
                            <a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="tm-home-box-3">
                    <div class="tm-home-box-3-img-container">
                        <img src="{{asset('/')}}assets2/img/index-09.jpg" alt="image" class="img-responsive">
                    </div>
                    <div class="tm-home-box-3-info">
                        <p class="tm-home-box-3-description">BenleGez, boş koltukları değerlendirerek insanları bir araya getiriyor ve seyahat etmeyi daha ekonomik hale getiriyor.</p>
                        <div class="tm-home-box-2-container">
                            <a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
                            <a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description box-3">Seyahat</span></a>
                            <a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="tm-home-box-3">
                    <div class="tm-home-box-3-img-container">
                        <img src="{{asset('/')}}assets2/img/index-10.jpg" alt="image" class="img-responsive">
                    </div>
                    <div class="tm-home-box-3-info">
                        <p class="tm-home-box-3-description">BenleGez, seyahat etmek isteyenlere güvenilir bir yolculuk deneyimi sunarken, yeni insanlarla tanışma fırsatı da sağlıyor.</p>
                        <div class="tm-home-box-2-container">
                            <a href="#" class="tm-home-box-2-link"><i class="fa fa-heart tm-home-box-2-icon border-right"></i></a>
                            <a href="#" class="tm-home-box-2-link"><span class="tm-home-box-2-description box-3">Seyahat</span></a>
                            <a href="#" class="tm-home-box-2-link"><i class="fa fa-edit tm-home-box-2-icon border-left"></i></a>
                        </div>
                    </div>
                </div>
            </div>
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
<script type="text/javascript" src="{{asset('/')}}assets2/js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}assets2/js/moment.js"></script>
<script type="text/javascript" src="{{asset('/')}}assets2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}assets2/js/bootstrap-datetimepicker.min.js"></script>
<script type="text/javascript" src="{{asset('/')}}assets2/js/jquery.flexslider-min.js"></script>

<script type="text/javascript" src="{{asset('/')}}assets2/js/templatemo-script.js"></script>
<script>

    function showComments(advertId) {
        var commentsDiv = document.getElementById("comments-" + advertId);

        var commentsContent = "<h3>Yorumlar</h3><ul><li>Yorum 1</li><li>Yorum 2</li></ul>";
        commentsDiv.innerHTML = commentsContent;
    }


    $(function() {

        $('#hotelCarTabs a').click(function (e) {
            e.preventDefault()
            $(this).tab('show')
        })

        $('#datetimepicker1').datetimepicker({
            format: 'DD-MM-YYYY',
            minDate: moment().startOf('day'),
            useCurrent: false
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
</body>
</html>
