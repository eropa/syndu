
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>EYE</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="format-detection" content="telephone=no">

    <link rel="stylesheet" href="{{@asset('css/mycss.css')}}">
    <style>
        .image-contain img {
            height: 100vh !important;
        }
        .image-scaler img {
            width: 100%;
            height: 100%;
            margin: auto;
            object-fit: contain;
        }
        .image-scaler .image {
            width: 960px !important;
            height: 540px;
        }


        .preloader {
            position: fixed;
            z-index: 9999999999;
            height: 100vh;
            width: 100vw;
            background-color: black;
            top: 0px;
            display: flex;
            align-items: center;
        }
        .spinner {
            width: 40px;
            height: 40px;
            background-color: #333;

            margin: 100px auto;
            -webkit-animation: sk-rotateplane 1.2s infinite ease-in-out;
            animation: sk-rotateplane 1.2s infinite ease-in-out;
        }

        @-webkit-keyframes sk-rotateplane {
            0% { -webkit-transform: perspective(120px) }
            50% { -webkit-transform: perspective(120px) rotateY(180deg) }
            100% { -webkit-transform: perspective(120px) rotateY(180deg)  rotateX(180deg) }
        }

        @keyframes sk-rotateplane {
            0% {
                transform: perspective(120px) rotateX(0deg) rotateY(0deg);
                -webkit-transform: perspective(120px) rotateX(0deg) rotateY(0deg)
            } 50% {
                  transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg);
                  -webkit-transform: perspective(120px) rotateX(-180.1deg) rotateY(0deg)
              } 100% {
                    transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
                    -webkit-transform: perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
                }
        }
    </style>
</head>
<body>	<div class="login-wrapper">
    <div class="verticaly-middle">
        <div class="inner">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>



                <div class="form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
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













</body>
</html>