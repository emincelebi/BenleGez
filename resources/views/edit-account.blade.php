<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hesabımı Düzenle</title>

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700' rel='stylesheet' type='text/css'>
    <link href="{{ asset('/') }}assets2/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets2/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets2/css/flexslider.css" rel="stylesheet">
    <link href="{{ asset('/') }}assets2/css/templatemo-style.css" rel="stylesheet">
    <style>
        body {
            background-color: #212529;
            color: #fff;
        }

        .profile-image {
            border-radius: 50%;
            width: 200px;
            height: 200px;
            object-fit: cover;
        }

        .full-name {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .nickname {
            font-size: 18px;
        }

        .form-control,
        .btn {
            background-color: #343a40;
            border-color: #343a40;
            color: #fff;
        }

        .form-control::placeholder {
            color: #aaa;
        }

        .form-control:focus,
        .btn:focus {
            background-color: #212529;
            border-color: #212529;
            box-shadow: none;
            color: #fff;
        }

        .btn-primary,
        .btn-primary:hover,
        .btn-primary:focus {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
        }

        .btn-danger,
        .btn-danger:hover,
        .btn-danger:focus {
            background-color: #dc3545;
            border-color: #dc3545;
            color: #fff;
        }
    </style>
</head>

<body>
<div class="container">
    <br>
    <br>
    <br>
    <br>
    <center>
        <form action="{{ route('update-account') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <!-- Form alanları -->
            <div class="form-group">
                <label for="name">Ad</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ auth()->user()->name }}" required>
            </div>
            <div class="form-group">
                <label for="surname">Soyad</label>
                <input type="text" id="surname" name="surname" class="form-control" value="{{ auth()->user()->surname }}" required>
            </div>
            <div class="form-group">
                <label for="nickname">Takma Ad</label>
                <input type="text" id="nickname" name="nickname" class="form-control" value="{{ auth()->user()->nickname }}" required>
            </div>
            <div class="form-group">
                <label for="email">E-posta</label>
                <input type="email" id="email" name="email" class="form-control" value="{{ auth()->user()->email }}" required>
            </div>
            <div class="form-group">
                <label for="password">Şifre</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="gender">Cinsiyet</label>
                <select id="gender" name="gender" class="form-control" required>
                    <option value="Erkek" {{ auth()->user()->gender === 'male' ? 'selected' : '' }}>Erkek</option>
                    <option value="Kadın" {{ auth()->user()->gender === 'female' ? 'selected' : '' }}>Kadın</option>
                </select>
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
            <button type="submit" class="btn btn-primary">Güncelle</button>
            <button type="button" class="btn btn-danger" onclick="location.href='{{ route('account') }}'">İptal</button>
        </form>
    </center>
    <br>
    <br>
    <footer class="tm-black-bg">
        <div class="container">
            <div class="row">
                <p class="tm-copyright-text">
                    &copy; {{ date('Y') }} BenleGez
                </p>
            </div>
        </div>
    </footer>
</div>

<script src="{{ asset('/') }}assets2/js/jquery.min.js"></script>
<script src="{{ asset('/') }}assets2/js/bootstrap.min.js"></script>
<script src="{{ asset('/') }}assets2/js/moment.js"></script>
<script src="{{ asset('/') }}assets2/js/bootstrap-datetimepicker.min.js"></script>
<script src="{{ asset('/') }}assets2/js/jquery.flexslider-min.js"></script>
<script src="{{ asset('/') }}assets2/js/templatemo-script.js"></script>

</body>

</html>
