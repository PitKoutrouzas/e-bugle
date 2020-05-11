<div id="nav_back" style="left: 0; width: 100vw; top: -20px; background-color: #ffffff; position: fixed; box-shadow: 1px 2px 1px #FDD26A; z-index: 10;">
<div id="navbar_login_desktop">
    <br/>
    <ul class="nav navbar-nav navbar-left" style="padding-left: 133px; padding-bottom: 14px; padding-top: 4px;">
        <!-- Authentication Links -->
        <a class="navbar-brand" href="{{ url('/') }}">
            {{--                        {{ config('app.name', 'Laravel') }}--}}
            <img style="height: 70px; margin-top: -20px;" src="{{config('app.logo')}}">

        </a>

        @if (Auth::guest())
            @if(strpos(url()->current(), 'register'))
                <li><a style="font-size: 18px; background-color: #fff; letter-spacing: 0.5px;" href="{{ route('login') }}">Login</a></li>
            @elseif(strpos(url()->current(), 'login'))
                <li><a style="font-size: 18px; background-color: #fff; letter-spacing: 0.5px;" href="{{ route('register') }}">Register</a></li>
            @else
                <li><a style="font-size: 18px; background-color: #fff; letter-spacing: 0.5px;" href="{{ route('login') }}">Login</a></li>
                <li><a style="font-size: 18px; background-color: #fff; letter-spacing: 0.5px;" href="{{ route('register') }}">Register</a></li>
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
    </ul>


    </table>
</div>
</div>