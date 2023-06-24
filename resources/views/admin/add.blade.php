<!DOCTYPE html>
<html>
<head>
    <title>Admin Ekle</title>
    <link href="{{ asset('/') }}assets/css/bootstrap.css" rel="stylesheet" />
    <style>
        body {
            background-color: #333;
            color: #fff;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <h2>Admin Ekle</h2>
            <form class="form-horizontal templatemo-create-account templatemo-container" role="form" action="{{ route('store.admin') }}" method="post">
                @csrf
                <div class="form-inner">
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="name" class="control-label">İsim</label>
                            <input id="name" type="text" class="form-control @error('email') is-invalid @enderror" name="name" autofocus>
                        </div>
                        <div class="col-md-6">
                            <label for="surname" class="control-label">Soyisim</label>
                            <input id="surname" type="text" class="form-control @error('email') is-invalid @enderror" name="surname">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-12">
                            <label for="email" class="control-label">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="name" class="control-label">Kullanıcı Adınız</label>
                            <input id="name" type="text" class="form-control @error('nickname') is-invalid @enderror" name="nickname" value="{{ old('nickname') }}" required autocomplete="nickname">
                            @error('nickname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col-md-6 templatemo-radio-group">
                            <label class="radio-inline">
                                <input type="radio" name="gender" id="optionsRadios1" value="Erkek"> Erkek
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="gender" id="optionsRadios2" value="Kadın"> Kadın
                            </label>
                            @error('gender')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="password" class="control-label">Şifreniz</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                             <strong>{{ $message }}</strong>
                        </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="submit" value="Hesap Oluştur" class="btn btn-info">
                        </div>
                    </div>
                </div>
                @error('error')
                <div class="alert alert-danger" role="alert">
                    {{ $message }}
                </div>
                @enderror
            </form>
        </div>
    </div>
</div>
</body>
</html>
