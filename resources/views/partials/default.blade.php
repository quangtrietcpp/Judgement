<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/main.css') }}">
    @yield('plugin_styles')
    @yield('inline_styles')
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <img class="navbar-brand logo" src="{{ asset('image/quochuy.png') }}" alt="{{ strtolower(env('APP_SITE')) }}">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="{{ route('top') }}"><button>Trang chủ</button></a>
                    </li>
                    <li class="nav-item">
                        @auth
                        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><button>Đăng xuất</button></a>
                        {{ Form::open(['url' => route('logout'), 'method' => 'POST', 'id' => 'logout-form', 'style' => 'display:none;']) }}
                        {{ Form::close() }}
                    @else
                        <a href="{{ route('login') }}"><button>Đăng nhập</button></a>
                    @endauth
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="wrapper">
        @yield('content')
    </div>

    <footer>
        <b><i>Phát triển bởi Đỗ Minh Quang</i></b>
        @yield('plugin_scripts')
        @yield('inline_scripts')
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </footer>
</body>
