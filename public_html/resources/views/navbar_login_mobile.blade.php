<div id="navbar_login_mobile" style="position: fixed; left: 0; width: 100vw; background-color: #fff; z-index: 10; box-shadow: 1px 2px 1px #FDD26A;">
    <div style="float: left; margin-left: -20px;">
        <a href="{{url('/blogsfeed')}}">
            <img style="margin-top: 12px; height: 30px; margin-left: 50px;" src="{{config('app.logo')}}">
        </a>
        <br/>
    </div>
    <div>
        <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo" style="margin-top:7px; margin-bottom:7px; float: right; color: #000 !important; background-color: #ffffff00 !important; border-color: #ffffff00 !important; margin-right: 40px;">
            <span class="icon-bar" style="margin-top: 4px; width: 25px; display: block; height: 3px; border-radius: 1px; background-color: #000;"></span>
            <span class="icon-bar" style="margin-top: 4px; width: 25px; display: block; height: 3px; border-radius: 1px; background-color: #000;"></span>
            <span class="icon-bar" style="margin-top: 4px; margin-bottom: 4px; width: 25px; display: block; height: 3px; border-radius: 1px; background-color: #000;"></span></button>

        <div id="demo" class="collapse">
            <p style="visibility: hidden">Item 1</p>
            <p style="visibility: hidden; margin-top: -10px;">Item 2</p>
            <p style="visibility: hidden; margin-top: -20px;">Item 3</p>
            @if (Auth::guest())
                @if(strpos(url()->current(), 'register'))
                    <div style="text-align: center;"><a style="font-size: 18px; letter-spacing: 0.5px; background-color: #fff;" href="{{ route('login') }}">Login</a></div>
                @elseif(strpos(url()->current(), 'login'))
                    <div style="text-align: center;"><a style="font-size: 18px; letter-spacing: 0.5px; background-color: #fff;" href="{{ route('register') }}">Register</a></div>
                @else
                    <div style="text-align: center;"><a style="font-size: 18px; letter-spacing: 0.5px; background-color: #fff;" href="{{ route('login') }}">Login</a></div>
                    <div style="text-align: center; padding-top: 10px;"><a style="font-size: 18px; letter-spacing: 0.5px; background-color: #fff;" href="{{ route('register') }}">Register</a></div>
                @endif
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            <a href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif

            <p style="visibility: hidden; margin-bottom: -5px;">Item 3</p>
        </div>
    </div>
</div>