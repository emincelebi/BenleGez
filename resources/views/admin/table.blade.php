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
                    <a class="active-menu" href="{{'table'}}"><i class="fa fa-edit fa-3x"></i>Mesajlar</a>
                </li>
            </ul>
        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Mesajlar</h2>
                    <h5>Hoşgeldin {{ auth()->user()->name }}</h5>
                    <br>
                    <br>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ad</th>
                            <th scope="col">Email</th>
                            <th scope="col">Konu</th>
                            <th scope="col">Mesaj</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "benlegez";

                        $conn = new mysqli($servername, $username, $password, $dbname);

                        $sql = "SELECT * FROM contacts";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<tr>";
                                echo "<th scope='row'>" . $row['id'] . "</th>";
                                echo "<td>" . $row['name'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['subject'] . "</td>";
                                echo "<td>" . $row['message'] . "</td>";
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='5'>Hiç mesaj bulunamadı.</td></tr>";
                        }
                        $conn->close();
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

