<!DOCTYPE html>
<html>
<head>
    <title>İlanı Sil</title>
    <link href="{{ asset('/') }}assets/css/bootstrap.css" rel="stylesheet"/>


    <style>
        body {
            background-color: #333;
            color: #fff;
        }

        .container {
            margin-top: 50px;
        }

        .form-container {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border-radius: 5px;
            background-color: #222;
        }

        .form-container h2 {
            text-align: center;
            margin-bottom: 30px;
            color: #fff;
        }

        .form-container label {
            color: #fff;
        }

        .form-container input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 3px;
            color: #0A0A0A;
        }

        .form-container input[type="button"] {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 3px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            text-align: center;
            cursor: pointer;
        }

        .form-container input[type="button"]:hover {
            background-color: #0069d9;
        }
    </style>

</head>

<body>
@if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif



<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-container">
                <h2>İlan Sil</h2>
                <form method="post" action="{{route('delete-ilan')}}">
                    @csrf
                    <label for="ilanid">İlan ID:</label>
                    <input type="text" id="ilanid" name="ilanid" required><br><br>
                    <button type="submit" class="btn btn-danger">İlanı Sil</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>


