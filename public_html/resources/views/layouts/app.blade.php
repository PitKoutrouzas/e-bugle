<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        .footer {
        left: 0;
        bottom: 30px;
        width: 100%;
        text-align: center;
        }

        a {
            text-decoration: none !important;
            color: #4C4C4C !important;
        }

        a:hover {
            color: #ebc349 !important;
        }

        textarea:focus {
            border-color: #ebc349 !important;
        }

        input:focus {
            border-color: #ebc348 !important;
        }

        @media all and (min-width:768px) {
            #navbar_login_desktop {display: inline;}
            #navbar_login_mobile {display: none;}
        }

        @media all and (max-width:767px) {
            #navbar_login_desktop {display: none;}
            #navbar_login_mobile {display: inline;}
        }

    </style>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

{{--    <title>{{ config('app.name', 'E-Bugle') }}</title>--}}

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>
<body>
    <div id="app">
{{--        <nav class="navbar navbar-default navbar-static-top" style="box-shadow: 1px 2px 1px #FDD26A; padding-bottom: 25px; top: -20px; height: 65px; margin-top: 30px;">--}}
{{--            <div class="container">--}}
{{--                <div class="navbar-header">--}}

{{--                    <!-- Branding Image -->--}}
{{--                    <a class="navbar-brand" href="{{ url('/') }}" style="margin-left: -230px">--}}
{{--                        {{ config('app.name', 'Laravel') }}--}}
{{--                        <img style="height: 70px; margin-top: -20px;" src="{{config('app.logo')}}">--}}

{{--                    </a>--}}
{{--                <!-- Collapsed Hamburger -->--}}
{{--                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">--}}
{{--                        <span class="sr-only">Toggle Navigation</span>--}}
{{--                        <span class="icon-bar"></span>--}}
{{--                        <span class="icon-bar"></span>--}}
{{--                        <span class="icon-bar"></span>--}}
{{--                    </button>--}}

{{--                </div>--}}



{{--                <ul>--}}
{{--                    <a class="navbar-brand" href="{{ url('/blogsfeed') }}">--}}
{{--                        --}}{{--                        {{ config('app.name', 'Laravel') }}--}}
{{--                        <img style="height: 70px; margin-top: -20px;" src="{{config('app.logo')}}">--}}

{{--                    </a>--}}
{{--                </ul>--}}




{{--                <div id="app-navbar-collapse" class="collapse">--}}
{{--                <ul style="margin-left: 245px !important;">--}}
{{--                    <!-- Authentication Links -->--}}
{{--                    @if (Auth::guest())--}}
{{--                        @if(strpos(url()->current(), 'register'))--}}
{{--                            <a style="font-size: 20px;" href="{{ route('login') }}">Login</a>--}}
{{--                        @elseif(strpos(url()->current(), 'login'))--}}
{{--                            <a style="font-size: 20px;" href="{{ route('register') }}">Register</a></li>--}}
{{--                        @else--}}
{{--                            <a style="font-size: 20px; padding-right: 25px; margin-left: -25px;" href="{{ route('login') }}">Login</a></li>--}}
{{--                            <a style="font-size: 20px;" href="{{ route('register') }}">Register</a></li>--}}
{{--                        @endif--}}
{{--                    @else--}}
{{--                        <li class="dropdown">--}}
{{--                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">--}}
{{--                                {{ Auth::user()->name }} <span class="caret"></span>--}}
{{--                            </a>--}}

{{--                            <ul class="dropdown-menu" role="menu">--}}
{{--                                <li>--}}
{{--                                    <a href="{{ route('logout') }}"--}}
{{--                                       onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                        Logout--}}
{{--                                    </a>--}}

{{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
{{--                                        {{ csrf_field() }}--}}
{{--                                    </form>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                    @endif--}}
{{--                </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </nav>--}}

        @include('navbar_login')
        @include('navbar_login_mobile')

        <br/><br/><br/>
        @yield('content')

        <div id="footer_bottom" style="position: absolute; bottom: -250px;">
        @include('footer')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
