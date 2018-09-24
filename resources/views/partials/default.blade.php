<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1024">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    @yield('plugin_styles')
    @yield('inline_styles')
</head>
<body>
    <header>
        <div class="container">
            <div class="top_logo">
                <img src="{{ asset('web/images/logo.png') }}" alt="{{ strtolower(env('APP_SITE')) }}">
            </div>
            <ul>
                <li><a href="{{ route('top') }}">Trang chủ</a></li>
                @auth
                    <li class="login"> <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Đăng xuất</a></li>
                    {{ Form::open(['url' => route('logout'), 'method' => 'POST', 'id' => 'logout-form', 'style' => 'display:none;']) }}
                    {{ Form::close() }}
                @else
                    <li class="login"><a href="{{ route('login') }}" >Đăng nhập</a></li>
                @endauth
            </ul>
        </div>
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
