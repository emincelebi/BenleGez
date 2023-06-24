<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Paneli</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="{{asset('/')}}assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="{{asset('/')}}assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->

    <!-- CUSTOM STYLES-->
    <link href="{{asset('/')}}assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <!-- TABLE STYLES-->
    <link href="{{asset('/')}}assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-..." crossorigin="anonymous" />


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
            height: 10px;
        }
        .comments {
            margin-top: 10px;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 4px;
        }


    </style>

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
font-size: 16px;">&nbsp; <a href="{{ route('user.logout') }}" class="btn btn-danger square-btn-adjust">ÇIKIŞ</a> </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="{{asset('/')}}assets/img/find_user.png" class="user-image img-responsive"/>
                </li>
                <li>
                    <a   href="{{'panel'}}"><i class="fa fa-dashboard fa-3x"></i>Ana Panel</a>
                </li>
                <li>
                    <a   href="{{'ui'}}"><i class="fa fa-user fa-3x"></i>Kullanıcı İşlemleri</a>
                </li>
                <li  >
                    <a   href="{{'table'}}"><i class="fa fa-edit fa-3x"></i>Mesajlar</a>
                </li>
                <li>
                    <a  class="active-menu" href="{{'ilanlar'}}"><i class="fa fa-bullhorn fa-3x"></i>İlanlar</a>
                </li>
            </ul>
        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>İlanlar</h2>
                    <h5>Hoşgeldin {{ auth()->user()->name }}</h5>
                    <br>
                    <br>
                    <center>
                        <a href="{{'delete-ilan'}}" class="btn btn-danger">İlan Sil</a>
                    </center>
                    <br>
                    <br>
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
                                echo "<p>ID:". $row['id'] . "</p>";
                                echo "<p>" . $row['fromwhere'] . " - " . $row['towhere'] . "</p>";
                                echo "<p>" . $row['when'] . "</p>";
                                echo "</div>";
                                echo "<div class='table-cell'>";
                                echo "<p><i class='fas fa-car'></i> " . $row['car'] . " </p>";
                                echo "</div>";
                                echo "<div class='table-cell'>";
                                echo "<p>" . $row['price'] . "$</p>";
                                echo "</div>";
                                echo "<div class='table-cell'>";
                                echo "<p><i class='fas fa-user'></i> " . $row['nickname'] . "</p>";
                                echo "</div>";
                                echo "<div class='table-cell'>";
                                echo "<button class='action-button' onclick='toggleComments($advertId)'>Yorumları Gör/Gizle</button>";
                                echo "<button class='action-button' onclick='showCommentForm($advertId)'>Yorum Yap</button>";
                                echo "</div>";
                                echo "</div>";
                                echo "<div id='comments-$advertId' class='comments' style='display: none;'>";

                                $comments_conn = new mysqli($servername, $username, $password, $dbname);

                                $comments_sql = "SELECT * FROM yorumlar WHERE ilanid = $advertId";
                                $comments_result = $comments_conn->query($comments_sql);

                                if ($comments_result->num_rows > 0) {
                                    echo "<div class='comment-box'>";
                                    while ($comments_row = $comments_result->fetch_assoc()) {
                                        echo "<div class='comment'>";
                                        echo "<p class='comment-text'>" . $comments_row['message'] . "</p>";
                                        echo "<p class='comment-author'><i class='fas fa-user'></i> " . $comments_row['username'] . "</p>";
                                        echo "</div>";
                                    }
                                    echo "</div>";
                                } else {
                                    echo "<p>Hiç yorum bulunamadı.</p>";
                                }
                                $comments_conn->close();

                                echo "</div>";
                                echo "<div id='comment-form-$advertId' class='comment-form' style='display: none;'>";
                                echo "<form action='" . route('yorum.store') . "' method='post'>";
                                echo csrf_field();
                                echo "<input type='hidden' name='ilanid' value='$advertId'>";
                                echo "<textarea name='message' placeholder='Yorumunuzu girin' rows='4' cols='50'></textarea>";
                                echo "<button type='submit'>Gönder</button>";
                                echo "</form>";
                                echo "</div>";
                                echo "<div class='table-space'></div>";
                            }
                        }
                        $conn->close();
                        ?>

                        <style>
                            .table {
                                width: 100%;
                                border-collapse: collapse;
                            }

                            .table-row {
                                display: flex;
                                justify-content: space-between;
                                align-items: center;
                                border-bottom: 1px solid #ccc;
                                padding: 10px 0;
                            }

                            .table-cell {
                                flex: 1;
                            }

                            .table-cell p {
                                font-size: 16px;
                                margin: 0;
                            }

                            .action-button {
                                background-color: #f4d03f;
                                color: #333;
                                border: none;
                                padding: 5px 10px;
                                font-size: 14px;
                                cursor: pointer;
                            }

                            .comments {
                                margin-top: 10px;
                                display: none;
                            }

                            .comment-box {
                                border: 1px solid #f4d03f;
                                padding: 10px;
                                margin-top: 10px;
                                background-color: #fef9e7;
                            }

                            .comment {
                                margin-bottom: 10px;
                            }

                            .comment-text {
                                font-size: 14px;
                                margin-bottom: 5px;
                            }

                            .comment-author {
                                font-size: 12px;
                                color: #999;
                            }

                            .comment-form {
                                margin-top: 10px;
                                display: none;
                            }

                            .comment-form textarea {
                                width: 100%;
                                height: 80px;
                                resize: none;
                            }
                            .action-button.join-button {
                                background-color: #28a745;
                                color: #fff;
                            }
                        </style>

                        <script>
                            function toggleComments(advertId) {
                                var commentsDiv = document.getElementById('comments-' + advertId);
                                if (commentsDiv.style.display === 'none') {
                                    commentsDiv.style.display = 'block';
                                } else {
                                    commentsDiv.style.display = 'none';
                                }
                            }

                            function showCommentForm(advertId) {
                                var commentFormDiv = document.getElementById('comment-form-' + advertId);
                                if (commentFormDiv.style.display === 'none') {
                                    commentFormDiv.style.display = 'block';
                                } else {
                                    commentFormDiv.style.display = 'none';
                                }
                            }

                        </script>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

