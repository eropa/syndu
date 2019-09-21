<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>EYE</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="{{@asset('css/bundle.min.css')}}">
</head>
<body>
    <div class="login-wrapper">
        <div class="verticaly-middle">
            <div class="inner">
                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="form-group">
                        <input type="text" class="input large" name="email"  autocomplete="new-password" placeholder="Логин">
                    </div>
                    <div class="form-group">
                        <input type="password" class="input large"  name="password" autocomplete="new-password" placeholder="Пароль">
                    </div>





                    <button type="submit" name="sign_in" value="1" class="btn block primary large">Войти</button>
                    <div class="alert">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </form>
            </div>
        </div>
    </div>

    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&amp;subset=cyrillic-ext" rel="stylesheet">
    <!-- https://material.io/tools/icons/?style=baseline -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <script src="{{@asset('js/lib/jquery.min.js')}}"></script>
    <script src="{{@asset('js/main.js')}}"></script>
</body>
</html>