<div id="navbar_mobile" style="position: fixed; left: 0; width: 100vw; background-color: #fff; z-index: 10; box-shadow: 1px 2px 1px #FDD26A;">
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
            @if (Auth::check())
                <div><a class="btn btn-link" style="text-decoration: none; text-align: left;  font-size: 20px;" href="{{url("/blogsboard/". Auth::id())}}">My Blog</a></div>
                <div><a class="btn btn-link" href="{{url("/profile/". Auth::id())}}" style="text-decoration: none; text-align: left; font-size: 20px;">Profile</a></div>
                <div id="searchbar" style="padding-bottom: 10px;">
                    {!! Form::open(['url'=>'blogsfeed']) !!}
                    <input id="searchinput" type="text" class="form-control" style="display: inline; font-weight: normal;" name="namesearch" placeholder="enter keywords for articles...">

                    <input class="form-control" type="image" src="/uploads/ebugle_search_icon.png" style="display: inline-block; width:40px; top: 11.5px;  line-height: 0.54643 !important; position: relative; padding-left: 3px; padding-right: 3px; padding-bottom: 1px; padding-top: 1px; border: none; outline: none; box-shadow: none;"/>
                    {!! Form::close() !!}
                </div>
                <div><a class="btn btn-link @if(Request::path() == 'blogsfeed/1') selectedcategory @endif" href="{{url("blogsfeed/1")}}" style="text-decoration: none; text-align: left; font-size: 20px;">Arts & Entertainment</a></div>
                <div><a class="btn btn-link @if(Request::path() == 'blogsfeed/2') selectedcategory @endif" href="{{url("blogsfeed/2")}}" style="text-decoration: none; text-align: left; font-size: 20px;">Business & Finance</a></div>
                <div><a class="btn btn-link @if(Request::path() == 'blogsfeed/3') selectedcategory @endif" href="{{url("blogsfeed/3")}}" style="text-decoration: none; text-align: left; font-size: 20px;">Health</a></div>
                <div><a class="btn btn-link @if(Request::path() == 'blogsfeed/4') selectedcategory @endif" href="{{url("blogsfeed/4")}}" style="text-decoration: none; text-align: left; font-size: 20px;">Social</a></div>
                <div><a class="btn btn-link @if(Request::path() == 'blogsfeed/5') selectedcategory @endif" href="{{url("blogsfeed/5")}}" style="text-decoration: none; text-align: left; font-size: 20px;">Science & Tech</a></div>
                <div><a class="btn btn-link @if(Request::path() == 'blogsfeed/6') selectedcategory @endif" href="{{url("blogsfeed/6")}}" style="text-decoration: none; text-align: left; font-size: 20px;">Travel</a></div>
                <div><a class="btn btn-link @if(Request::path() == 'blogsfeed/7') selectedcategory @endif" href="{{url("blogsfeed/7")}}" style="text-decoration: none; text-align: left; font-size: 20px;">Thoughts</a></div>
                <div style="box-shadow: 0px -2px 2px #ebc349c2"><a class="btn btn-link" style="text-decoration: none;  font-size: 20px;" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log out</a></div>
            @else
                <div id="searchbar" style="padding-bottom: 10px;">
                    {!! Form::open(['url'=>'blogsfeed']) !!}
                    <input id="searchinput" type="text" class="form-control" style="display: inline; font-weight: normal;" name="namesearch" placeholder="enter keywords for articles...">

                    <input class="form-control" type="image" src="/uploads/ebugle_search_icon.png" style="display: inline-block; width:40px; top: 11.5px;  line-height: 0.54643 !important; position: relative; padding-left: 3px; padding-right: 3px; padding-bottom: 1px; padding-top: 1px; border: none; outline: none; box-shadow: none;"/>
                    {!! Form::close() !!}
                </div>
                <div><a class="btn btn-link @if(Request::path() == 'blogsfeed/1') selectedcategory @endif" href="{{url("blogsfeed/1")}}" style="text-decoration: none; text-align: left; font-size: 20px;">Arts & Entertainment</a></div>
                <div><a class="btn btn-link @if(Request::path() == 'blogsfeed/2') selectedcategory @endif" href="{{url("blogsfeed/2")}}" style="text-decoration: none; text-align: left; font-size: 20px;">Business & Finance</a></div>
                <div><a class="btn btn-link @if(Request::path() == 'blogsfeed/3') selectedcategory @endif" href="{{url("blogsfeed/3")}}" style="text-decoration: none; text-align: left; font-size: 20px;">Health</a></div>
                <div><a class="btn btn-link @if(Request::path() == 'blogsfeed/4') selectedcategory @endif" href="{{url("blogsfeed/4")}}" style="text-decoration: none; text-align: left; font-size: 20px;">Social</a></div>
                <div><a class="btn btn-link @if(Request::path() == 'blogsfeed/5') selectedcategory @endif" href="{{url("blogsfeed/5")}}" style="text-decoration: none; text-align: left; font-size: 20px;">Science & Tech</a></div>
                <div><a class="btn btn-link @if(Request::path() == 'blogsfeed/6') selectedcategory @endif" href="{{url("blogsfeed/6")}}" style="text-decoration: none; text-align: left; font-size: 20px;">Travel</a></div>
                <div><a class="btn btn-link @if(Request::path() == 'blogsfeed/7') selectedcategory @endif" href="{{url("blogsfeed/7")}}" style="text-decoration: none; text-align: left; font-size: 20px;">Thoughts</a></div>
                <div style="box-shadow: 0px -2px 2px #ebc349c2"><a class="btn btn-link" style="text-decoration: none;  font-size: 20px;" href="{{url('/login')}}"><span class="glyphicon glyphicon-log-in"></span> Sign In / <span class="glyphicon glyphicon-user"></span> Register</a></div>
            @endif
{{--            <p style="visibility: hidden; margin-bottom: -5px;">Item 3</p>--}}
        </div>
    </div>
</div>