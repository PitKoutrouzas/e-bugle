@extends('layouts.app')

@section('content')

{{--    <div>--}}
{{--        <img src="https://scontent.fnic4-1.fna.fbcdn.net/v/t1.15752-9/87296363_1039656913063917_6203575304061976576_n.png?_nc_cat=101&_nc_ohc=iTMuVhLt8LQAX9xe1Ak&_nc_ht=scontent.fnic4-1.fna&oh=640d15000da5ef7976059b985b939e4e&oe=5EF03C9E">--}}
{{--    </div>--}}

<title>Sign In</title>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="text-align: center; font-size: 70px; font-weight: bold;">Sign In<br/>
                    <p style="text-align: center; font-size: 16px; font-weight: normal;">Create your own blog and start writing immediately !</p>
                </div>


                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Enter E-Bugle
                                </button>

                                <a class="btn btn-link" style="color: gray;" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="footer">

    </div>
@endsection
