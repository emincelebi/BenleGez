<!DOCTYPE html>
<html>
<head>
    <title>403 - Yetkisiz Erişim</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #1f2937;
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #374151;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .icon {
            font-size: 60px;
            margin-bottom: 20px;
        }

        h1 {
            margin-top: 0;
            color: #fff;
        }

        p {
            color: #ccc;
        }

        .bottom-content {
            margin-top: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .bottom-content p {
            margin: 0;
            font-size: 14px;
            color: #ccc;
            margin-bottom: 10px;
        }

        .btn {
            padding: 10px 20px;
            background-color: #4a5568;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #2d3748;
        }

        .car-animation {
            animation-name: carMove;
            animation-duration: 2s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
            animation-direction: alternate;
        }

        @keyframes carMove {
            from {
                transform: translateX(50px);
            }
            to {
                transform: translateX(-50px);
            }
        }
    </style>
</head>
<body>
<div class="container">
    <i class="icon fas fa-car car-animation"></i>
    <h1>403 - Yetkisiz Erişim</h1>
    <p>Bu sayfaya erişim izniniz bulunmamaktadır.</p>

    <div class="bottom-content">
        <p>Benle Gezle daha hızlı bir şekilde istediğiniz yere gidin!</p>
        <a href="/" class="btn"><i class="fas fa-arrow-circle-left"></i> Geri Dön</a>
    </div>
</div>
</body>
</html>
