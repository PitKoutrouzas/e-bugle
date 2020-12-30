<div id="nav_back" style="left: 0; width: 100vw; top: -20px; background-color: #ffffff; position: fixed; box-shadow: 1px 2px 1px #FDD26A; z-index: 10;">
<div id="navbar_desktop">
    <br/>
    <table id="header" class="table-responsive" style="width: 122%; margin-left: -15%; border: 0; margin-top: -10px;">
        <th style="text-align: center !important;">
            <div style="@if (Auth::check()) padding-left: 180px; @else padding-left:90px; @endif padding-right: 40px;">
                <a href="{{url('/blogsfeed')}}">
                    <img style="height: 70px; margin-left: 40px;" src="{{config('app.logo')}}">
                </a>
                <br/>
            </div>
        </th>
        <th @if (Auth::check()) style="padding-right: 30px;" @else style="padding-right: 50px;" @endif>
            @if (Auth::check())
                <div>
                    <a id="blogslink" class="btn btn-link" style="float: left; text-decoration: none;  margin-left: -5%; font-size: 18px; letter-spacing: 0.5px;" href="{{url("/blogsboard/". Auth::id())}}">My Blogs</a>

                    <text id="titlebread" style="float: left; margin-left: 5px; "></text>
                    <br/>
                </div>
            @endif
        </th>

        <th @if (Auth::check())style="padding-right: 20px;" @else style="padding-right: 40px;" @endif>
            @if (Auth::check())
                <div>
                    <a id="profilelink" class="btn btn-link" href="{{url("/profile/". Auth::id())}}" style="float: left; text-decoration: none; font-size: 18px; letter-spacing: 0.5px;">Profile</a>

                    <text id="titlebread2" style="float: left; margin-left: 5px; "></text>
                    <br/>
                </div>
            @endif
        </th>


        <th id="searchth" style="text-align: right;">
            <div id="searchbar" style="padding-bottom: 10px;">
                {!! Form::open(['url'=>'blogsfeed']) !!}
                <input id="searchinput" type="text" class="form-control" style="display: inline; font-weight: normal;" name="namesearch" placeholder="enter keywords for blogs...">

                <input class="form-control" type="image" src="http://seiis.cut.ac.cy/~seiis_lab/iconsearch.png" style="display: inline-block; width:40px; top: 11.5px;  line-height: 0.54643 !important; position: relative; padding-left: 3px; padding-right: 3px; padding-bottom: 1px; padding-top: 1px; border: none; outline: none; box-shadow: none; background-color: #ffffff00;"/>
                {!! Form::close() !!}
            </div>
        </th>
        @if (Auth::guest())

            <th style="width: 360px;">
                <div style="padding-right: 235px;">
                    <a id="loginlink" class="btn btn-link" style="text-decoration: none; float: right;  font-size: 18px; letter-spacing: 0.5px;" href="{{url('/login')}}"><span class="glyphicon glyphicon-log-in" style="left: -3px;"></span>   Sign In / <span class="glyphicon glyphicon-user"></span> Register</a>

                    <text id="titlebread3" style="float: left; margin-left: 5px; "></text>
                    <br/>
                </div>
            </th>
        @else
            <th style="width: 360px;">
                <div style="padding-right: 235px;">
                    <a id="loginlink" class="btn btn-link" style="text-decoration: none; float: right;  font-size: 18px; letter-spacing: 0.5px;" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><span class="glyphicon glyphicon-log-out" style="left: -3px;"></span>   Log out</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                    <br/>
                </div>
            </th>
        @endif
    </table>
</div>
</div>