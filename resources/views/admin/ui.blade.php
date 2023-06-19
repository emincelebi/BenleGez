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
                <span class="fa fa-bar"></span>
                <span class="fa fa-bar"></span>
                <span class="fa fa-bar"></span>
            </button>
            <a class="navbar-brand" href="{{'panel'}}">Admin</a>
        </div>
        <div style="color: white;
  padding: 15px 50px 5px 50px;
  float: right;
  font-size: 16px;">&nbsp; <a href="{{'index'}}" class="btn btn-danger square-btn-adjust">Çıkış Yap</a> </div>
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
                    <a class="active-menu" href="{{'ui'}}"><i class="fa fa-user fa-3x"></i>Kullanıcı İşlemleri</a>
                </li>
                <li  >
                    <a  href="{{'table'}}"><i class="fa fa-edit fa-3x"></i>Mesajlar</a>
                </li>
            </ul>
            </li>

            </ul>


        </div>

    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Kullanıcı İşlemleri</h2>
                    <h5>Hoşgeldin Admin </h5>
                    <br>
                    <br>
                    <center>
                        <button type="button" class="btn btn-success">Kullanıcı Ekle</button>
                        <button type="button" class="btn btn-warning">Kullanıcı Güncelle</button>
                        <button type="button" class="btn btn-danger">Kullanıcı Sil</button>
                    </center>
                    <br>
                    <br>
                    <table class="table table-dark">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Ad</th>
                            <th scope="col">E-posta</th>
                            <th scope="col">Cinsiyet</th>
                            <th scope="col">Şifre</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php

                        $host = 'localhost';
                        $dbname = 'benlegez';
                        $username = 'root';
                        $password = '';

                        $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8mb4";

                            $db = new PDO($dsn, $username, $password);
                            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            $query = "SELECT * FROM users";
                            $stmt = $db->prepare($query);
                            $stmt->execute();
                            $users = $stmt->fetchAll(PDO::FETCH_ASSOC);

                            foreach ($users as $user) {
                                echo "<tr>";
                                echo "<th scope='row'>" . $user['id'] . "</th>";
                                echo "<td>" . $user['name'] . "</td>";
                                echo "<td>" . $user['email'] . "</td>";
                                echo "<td>" . $user['gender'] . "</td>";
                                echo "<td>" . $user['password'] . "</td>";
                                echo "</tr>";
                            }
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
