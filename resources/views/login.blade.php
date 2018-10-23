@extends('partials.default')
@section('title')
Đăng nhập
@endsection

@section('inline_styles')
<link rel="stylesheet" type="text/css" href="main.css" />
@endsection

@section('content')
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Đăng nhập</h5>
                        {{ Form::open(['url' => route('login.request'), 'method' => 'POST'], ['class' => 'form-signin']) }}
                            <div class="form-label_group">
                                <label>{{ __('Tài khoản') }}</label>
                                {{ Form::text('user_id', null, ['class' => 'form-control']) }}
                            </div>

                            <div class="form-label-group">
                                <label>{{ __('Mật khẩu') }}</label><br />
                                {{ Form::password('password', null, ['class' => 'form-control']) }}
                            </div>
                            {{ Form::submit('Đăng nhập', ['class' => 'btn btn-lg btn-primary btn-block'])}}
                            <hr class="my-4">
                        {{ Form::close() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection

