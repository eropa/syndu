
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <title>EYE</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="format-detection" content="telephone=no">

    <link rel="stylesheet" href="{{@asset('css/bundle.min.css')}}">

</head>
<body>

<header class="heading">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-10">
                СУНДИ / Платорма для качественных исследовании
            </div>

            <div class="col-xs-2 align-right">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>



                    </li>
                @endguest
                v1.1
            </div>
        </div>
    </div>
</header>

<main>

    <div class="card">
        <div class="heading">
            <div class="text">
                <a href="#">Roodi</a> /
                Типы тестов
            </div>
        </div>
        <div class="body">
            <ul class="clear main-nav">
                <li>
                    <a href="new.html">
                        <figure>
                            <img src="{{@asset('img/menu/1.svg')}}" alt="">
                        </figure>
                        Одинарка
                    </a>
                </li>
                <li>
                    <a href="result.html">
                        <figure>
                            <img src="{{@asset('img/menu/3.svg')}}" alt="">
                        </figure>
                        Выборка
                    </a>
                </li>
                <li>
                    <a href="view.html">
                        <figure>
                            <img src="img/menu/2.svg" alt="">
                        </figure>
                        Видео
                    </a>
                </li>
                <li>
                    <a href="zones.html">
                        <figure>
                            <img src="img/menu/4.svg" alt="">
                        </figure>
                        Таргетинг
                    </a>
                </li>
                <li class="disabled">
                    <a href="#">
                        <figure>
                            <img src="img/menu/5.svg" alt="">
                        </figure>
                        Сунди
                    </a>
                </li>
                <li class="disabled">
                    <a href="new.html">
                        <figure>
                            <img src="img/menu/6.svg" alt="">
                        </figure>
                        Монолитная
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="card">
        <div class="heading has-controls">
            <div class="text">Проведено исследований 5</div>
            <div class="controls">
                <ul class="clear">
                    <li class="hidden" id="deleteBtn">
                        <button class="action">
                            <i class="material-icons">delete_forever</i>
                            <small>(<span class="count"></span>)</small>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
        <div class="body">
            <table class="table">
                <thead>
                <tr>
                    <th style="width: 50px;">
                        <div class="checkbox">
                            <input type="checkbox" data-show-control="#deleteBtn" id="ch1" data-select-all>
                            <label for="ch1"></label>
                        </div>
                    </th>
                    <th style="width: 40px;">№</th>
                    <th>Проект</th>
                    <th>Цель проекта</th>
                    <th class="align-right">Дата создания</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        <div class="checkbox">
                            <input type="checkbox" data-show-control="#deleteBtn" id="ch6">
                            <label for="ch6"></label>
                        </div>
                    </td>
                    <td>1</td>
                    <td><i class="material-icons primary">blur_circular</i>Ya Chin-Ho</td>
                    <td>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</td>
                    <td class="align-right">14 декабря, 15:08</td>
                </tr>
                <tr>
                    <td>
                        <div class="checkbox">
                            <input type="checkbox" data-show-control="#deleteBtn" id="ch2">
                            <label for="ch2"></label>
                        </div>
                    </td>
                    <td>2</td>
                    <td><i class="material-icons error">control_camera</i>Nathaniel Phillips</td>
                    <td>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</td>
                    <td class="align-right">14 декабря, 15:08</td>
                </tr>
                <tr>
                    <td>
                        <div class="checkbox">
                            <input type="checkbox" data-show-control="#deleteBtn" id="ch3">
                            <label for="ch3"></label>
                        </div>
                    </td>
                    <td>3</td>
                    <td><i class="material-icons danger">subscriptions</i>Fua Lamba</td>
                    <td>Sit amet, consectetur adipisicing elit, sed do eiusmod</td>
                    <td class="align-right">14 декабря, 15:08</td>
                </tr>
                <tr>
                    <td>
                        <div class="checkbox">
                            <input type="checkbox" data-show-control="#deleteBtn" id="ch4">
                            <label for="ch4"></label>
                        </div>
                    </td>
                    <td>4</td>
                    <td><i class="material-icons primary">flag</i>Masood El Toure</td>
                    <td>Enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi </td>
                    <td class="align-right">14 декабря, 15:08</td>
                </tr>
                <tr>
                    <td>
                        <div class="checkbox">
                            <input type="checkbox" data-show-control="#deleteBtn" id="ch5">
                            <label for="ch5"></label>
                        </div>
                    </td>
                    <td>5</td>
                    <td><i class="material-icons success">settings_input_component</i>Phakamile Sikali</td>
                    <td>Sit amet, consectetur adipisicing elit, sed do eiusmod</td>
                    <td class="align-right">14 декабря, 15:08</td>
                </tr>
                <tr>
                    <td>
                        <div class="checkbox">
                            <input type="checkbox" data-show-control="#deleteBtn" id="ch7">
                            <label for="ch7"></label>
                        </div>
                    </td>
                    <td>6</td>
                    <td><i class="material-icons error">theaters</i>Phakamile Sikali</td>
                    <td>Sit amet, consectetur adipisicing elit, sed do eiusmod</td>
                    <td class="align-right">14 декабря, 15:08</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="heading"><div class="text">Модалки и все такое</div></div>
        <div class="body">
            <button type="button" class="btn primary" data-call="#popupProject">Создать проект</button>
            <button type="button" class="btn success" data-call="#popupRilo">Добавить рыло</button>
            <button type="button" class="btn danger" data-call="#popupLogin">Логвин как попап</button>
            <a href="login.html" class="btn danger">Страница Логвина, ну и так и так сделал</a>
            <button type="button" class="btn" data-call="#popupTest2">Попап что все готово</button>
            <button type="button" class="btn" data-call="#popupTest">Херануть тест</button>
            <button type="button" class="btn" data-call="#popupTestFour">Херануть тест 2x2</button>
            <hr>
            <a class="btn" href="login.html">login</a>
            <a class="btn" href="index.html">index</a>
            <a class="btn" href="new.html">new</a>
            <a class="btn" href="result2.html">result2</a>
            <a class="btn" href="result-guest.html">result-guest</a>
            <a class="btn" href="result.html">result</a>
            <a class="btn" href="view.html">view</a>
            <a class="btn" href="zones.html">zones</a>
        </div>
    </div>

    <div class="card">
        <div class="heading"><div class="text">Тут картинки для примера</div></div>
        <div class="body">
            <div class="row">
                <div class="col-xs-6">
                    растягивается
                    <figure class="image-contain stretch">
                        <img src="temp/5.jpg" alt="">
                    </figure>
                </div>
                <div class="col-xs-6">
                    сохраняет размер
                    <figure class="image-contain">
                        <img src="temp/5.jpg" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </div>

</main>

<div class="popup" id="popupTest">
    <div class="test"
         data-show-time="4000"
         data-delay-time="2000"
         data-fading-speed="1"
         data-intro-time="3"
    >
        <figure class="image-contain">
            <img src="temp/1.jpg">
        </figure>
        <figure class="image-contain">
            <img src="temp/2.jpg">
        </figure>
        <figure class="image-contain">
            <img src="temp/3.jpg">
        </figure>
        <figure class="image-contain">
            <img src="temp/4.jpg">
        </figure>
        <ul class="clear timer"></ul>
    </div>
</div>
<div class="popup" id="popupTestFour">
    <div class="test"
         data-show-time="2000"
         data-delay-time="1000"
         data-fading-speed="1"
         data-intro-time="2"
    >
        <figure class="image-contain multi-image">
            <div><img src="temp/1.jpg"></div>
            <div><img src="temp/2.jpg"></div>
            <div><img src="temp/3.jpg"></div>
            <div><img src="temp/4.jpg"></div>
        </figure>
        <figure class="image-contain multi-image">
            <div><img src="temp/3.jpg"></div>
            <div><img src="temp/1.jpg"></div>
            <div><img src="temp/4.jpg"></div>
            <div><img src="temp/2.jpg"></div>
        </figure>
        <figure class="image-contain multi-image">
            <div><img src="temp/4.jpg"></div>
            <div><img src="temp/3.jpg"></div>
            <div><img src="temp/2.jpg"></div>
            <div><img src="temp/1.jpg"></div>
        </figure>
        <ul class="clear timer"></ul>
    </div>
</div>
<div class="popup" id="popupTest2">
    <!-- чтобы фона не было видно -->
    <div class="inner transparent">
        <div class="text">Все готово для начала теста!</div>
        <button type="button" class="btn primary large block" data-call="#popupTest" data-dismiss="#popupTest2">Запустить</button>
        <div class="alert">Длительность теста 5 минут 25 секунд</div>
    </div>
</div>
<div class="popup" id="popupProject">
    <div class="inner">
        <form action="#" class="static">
            <div class="form-group">
                <input type="text" class="input large" placeholder="Название проекта">
            </div>
            <div class="form-group">
                <textarea rows="6" class="input" placeholder="Цель проекта"></textarea>
            </div>
            <button type="submit" class="btn block primary large">Создать</button>
        </form>
    </div>
</div>
<div class="popup" id="popupRilo">
    <div class="inner">
        <form action="#" class="static">
            <div class="form-group">
                <input type="text" class="input large" placeholder="Имя фамилия">
            </div>
            <div class="form-group">
                <input type="text" class="input large" placeholder="Возраст">
            </div>
            <button type="submit" class="btn block primary large">Начать тестирование</button>
        </form>
    </div>
</div>
<div class="popup" id="popupLogin">
    <div class="inner">
        <form action="#" class="static" autocomplete="new-password">
            <div class="form-group">
                <input type="text" class="input large" autocomplete="new-password" placeholder="Логин">
            </div>
            <div class="form-group">
                <input type="password" class="input large" autocomplete="new-password" placeholder="Пароль">
            </div>
            <button type="submit" class="btn block primary large">Войти</button>
            <div class="alert">Ты втираешь какую-то дичь</div>
        </form>
    </div>
</div>

<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&amp;subset=cyrillic-ext" rel="stylesheet">
<!-- https://material.io/tools/icons/?style=baseline -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

<script src="js/lib/jquery.min.js"></script>
<script src="js/main.js"></script>

<script src="js/init/popup.js"></script>
<script src="js/init/dropdown.js"></script>
<script src="js/init/table-checkbox.js"></script>
<script src="js/init/test.js"></script>

<script>
    // чтобы видел
    $('.timer').on('timer:start', function(){
        console.log('start');
    });
    $('.timer').on('timer:change', function(){
        console.log('change');
    });
    $('.timer').on('timer:end', function(){
        console.log('end');
    });
</script>

</body>
</html>