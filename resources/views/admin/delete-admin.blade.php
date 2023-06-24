<!DOCTYPE html>
<html>
<head>
    <title>Kullanıcı Sil</title>
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

<div class="container">

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="form-container">
                <h2>Kullanıcı Sil</h2>
                <form method="post" action="{{route('delete-admin')}}">
                    @csrf
                    <label for="nickname">Kullanıcı Adı:</label>
                    <input type="text" id="nickname" name="nickname" required><br><br>
                    <button type="submit" class="btn btn-danger">Kullanıcıyı Sil</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>


