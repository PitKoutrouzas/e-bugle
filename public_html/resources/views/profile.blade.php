<!doctype html>
<!-- Na dimiourgisw form me collapsibles mesa kai na valw ena scroll mesa-->
<html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Merriweather" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css">

        .hrclass{
            color: #A9E2F3;
        }

        a{
            color: #4C4C4C !important;
            line-height: 1.6 !important;
            text-decoration: none;
        }

        a:hover {
            color: #337ab7 !important;
        }

        h1,h2,h3,h4,h5,h6 {
            line-height: 1.6 !important;
            font-family: Open Sans !important;
        }

        body {
            font-family: Open Sans !important;
            line-height: 1.6 !important;
            margin-left: 15% !important;
            margin-right: 15% !important;
            margin:0;
            padding:0;
        }

        iframe{
            display: none;
        }

        html {
            position: relative;
            min-height: 100%;
        }

        .newsactive {
            background-color: #4d90fe;
        }
        .nav-tm{
            text-align: center;
        }

        .newseditTitle{
            width: 221px;
            background: transparent url("bg.jpg") no-repeat;
            color : #747862;
            height:20px;
            border:0;
            padding:4px 8px;
            margin-bottom:0px;
        }

        .newseditDescr{
            color : #747862;
            height:20px;
            border:0;
            padding:4px 8px;
            margin-bottom:0px;
        }
        table {
            border-collapse: collapse;
        }

        thead { display: block; }

        .nav-ra{
            text-align: center;
        }


        .title {
            position: relative;
            text-align: center;
            text-shadow: 0 -1px rgba(0,0,0,0.6);
            font-size: 20px;
            height: 70px;
            line-height: 30px;
            background: #355681;
            padding: 5px 15px;
            color: white;
            box-shadow: inset 0 0 5px rgba(53,86,129, 0.5);
            z-index: -1;
        }

        .container{
            position: relative;
            text-align: center;
            font-size: 19px;
            height: 70px;
            line-height: 30px;
            background: #355681;
            padding: 5px 15px;
            color: white;
            box-shadow: inset 0 0 5px rgba(53,86,129, 0.5);
        }

        #container {
            width : 100%;
            height : auto;
            min-height: 600px;
            position: relative;
            font-size: 19px;
            line-height: 30px;
            color: white
        }



        .gobtn,.gobtn2,.btn-news {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);   background: #3498db;
            background-image: -webkit-linear-gradient(top, #3498db, #2980b9);
            background-image: -moz-linear-gradient(top, #3498db, #2980b9);
            background-image: -ms-linear-gradient(top, #3498db, #2980b9);
            background-image: -o-linear-gradient(top, #3498db, #2980b9);
            background-image: linear-gradient(to bottom, #3498db, #2980b9);
            -webkit-border-radius: 20;
            -moz-border-radius: 20;
            border-radius: 20px;
            color: #ffffff;
            font-size: 14px;
            padding: 8px 20px 8px 20px;
            text-decoration: none;
        }

        .gobtn:hover, .gobtn2:hover, .addnewsbtn:hover
        {
            background: #3cb0fd;
            background-image: -webkit-linear-gradient(top, #3cb0fd, #3498db);
            background-image: -moz-linear-gradient(top, #3cb0fd, #3498db);
            background-image: -ms-linear-gradient(top, #3cb0fd, #3498db);
            background-image: -o-linear-gradient(top, #3cb0fd, #3498db);
            background-image: linear-gradient(to bottom, #3cb0fd, #3498db);
            text-decoration: none;
        }

        .latestnews {
            height : 980px;
            padding-right: 50px;
            padding-left: 50px;
            width: 300px;
            position:relative;
            margin-left: -10px;
            text-align: center;
            z-index: 5;
        }

        .newscolumn {
            min-height: 500px;
            height : auto;
            float: left;
            position:relative;
            color: black;
            text-decoration: none;
            text-align: center;
            width: 100%;
        }

    </style>
    <meta charset="utf-8">
    <!-- Latest compiled JavaScript -->

    <title>Blogs</title>
    <!-- Latest compiled and minified CSS -->

    @if ($agent->isDesktop())
        <link rel="stylesheet" href="{{asset('public/css/desktop/profile_desktop.css')}}">
    @elseif ($agent->isTablet())
        <link rel="stylesheet" href="{{asset('public/css/tablet/profile_tablet.css')}}">
    @elseif ($agent->isMobile())
        <link rel="stylesheet" href="{{asset('public/css/mobile/profile_mobile.css')}}">
    @else
        <link rel="stylesheet" href="{{asset('public/css/desktop/profile_desktop.css')}}">
    @endif

    <link rel="stylesheet" type="text/css" href="main_responsive.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="base.css">
    <link rel="stylesheet" href="skeleton.css">
    <link rel="stylesheet" href="layout.css">
    <link rel="stylesheet" type="text/css" href="resetCrafty.css">
    <link rel="stylesheet" type="text/css" href="main_responsive.css">

    <!-- jQuery library -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.7/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.dropdown-toggle').dropdown();
        });
    </script>

    <script>
        function highlightKeywords()
        {
            var elements_description = document.getElementsByClassName("formatted_description");
            var elements_title = document.getElementsByClassName("formatted_title");

            for (var i=0; i<elements_title.length; i++) {
                elements_title[i].innerHTML = elements_title[i].getAttribute("value");
                elements_description[i].innerHTML = elements_description[i].getAttribute("value");
            }


        }

    </script>

</head>


<body>
<!--HEADER START-->
<!-- Section to host top layout of page-->
<?php
//include 'navigationbar.php';
?>
<!--HEADER END-->
<script>
    window.onload = function () {
        document.getElementById("newsadd").style.display = 'none';
        document.getElementById("newsedit").style.display = 'none';
        document.getElementById("newsdelete").style.display = 'none';
        document.getElementById("editnews").style.display = 'none';
        document.getElementById("deletenews").style.display = 'none';
        document.getElementById("newsshow").style.display = 'none';
        document.getElementById("backbutton").style.display = 'none';

    };
</script>

<div id="container">

<!-- These are the forms that are showed when the Add,Edit,Delete News buttons are clicked -->

    <newscolumn class="newscolumn" id="newscolumn" style="">

        <!-- MODAL -->

        <div class="modal fade in" id="favoritesModal"
             tabindex="-1" role="dialog"
             aria-labelledby="favoritesModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close"
                                data-dismiss="modal"
                                aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title"
                            id="favoritesModalLabel">The Sun Also Rises</h4>
                    </div>
                    <div class="modal-body">
                        <p>
                            Please confirm you would like to add
                            <b><span id="fav-title">The Sun Also Rises</span></b>
                            to your favorites list.
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button"
                                class="btn btn-default"
                                data-dismiss="modal">Close</button>
                        <span class="pull-right">
          <button type="button" class="btn btn-primary">
            Add to Favorites
          </button>
        </span>
                    </div>
                </div>
            </div>
        </div>


        <!-- Modal -->
        <div class="modal fade in" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        ...
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>


        <!-- END MODAL -->

        <?php
        //        $newschange = $_GET['newschange'];
        ?>

            <br/>
        <table id="header" class="table-responsive" style="width: 122%; margin-left: -15%; border: 0; margin-top: -10px;">
            <th style="width: 380px;">
                <div>
                    <a href="{{url('/blogsfeed')}}">
                        <img style="height: 70px; margin-left: 90px;" src="{{config('app.logo')}}">
                    </a>
                    <br/>
                </div>
            </th>
            <th @if (Auth::check()) style="padding-right: 30px;" @else style="padding-right: 50px;" @endif>
                @if (Auth::check())
                <div>
                    <a id="blogslink" class="btn btn-link" style="float: left; text-decoration: none;  margin-left: -5%; font-size: 20px;" href="{{url("/blogsboard/". Auth::id())}}">My Blogs</a>

                    <text id="titlebread" style="float: left; margin-left: 5px; "></text>
                    <br/>
                </div>
                    @endif
            </th>
                <th @if (Auth::check()) style="padding-right: 20px;" @else style="padding-right: 40px;" @endif>
                    @if (Auth::check())
                    <div>
                        <a id="profilelink" class="btn btn-link" href="{{url("/profile/". Auth::id())}}" style="float: left; text-decoration: none; font-size: 20px;">My Profile</a>

                        <text id="titlebread2" style="float: left; margin-left: 5px; "></text>
                        <br/>
                    </div>
                        @endif
                </th>
            @if (Auth::guest())
                <th>
                    <div>
                        <a id="loginlink" class="btn btn-link" style="float: left; text-decoration: none;  font-size: 20px;" href="{{url('/login')}}">Log In</a>

                        <text id="titlebread3" style="float: left; margin-left: 5px; "></text>
                        <br/>
                    </div>
                </th>
            @else
                <th>
                    <div>
                        <a id="loginlink" class="btn btn-link" style="float: left; text-decoration: none;  font-size: 20px;" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log out</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                        <br/>
                    </div>
                </th>
            @endif
            <th id="searchth" style="text-align: right;">
                <div id="searchbar" style="padding-bottom: 10px;">
                    {!! Form::open(['url'=>'blogsboard']) !!}
                    <input id="searchinput" type="text" class="form-control" style="display: inline; font-weight: normal;" name="namesearch" placeholder="<find blogs with keywords>">

                    <input class="form-control" type="image" src="http://seiis.cut.ac.cy/~seiis_lab/iconsearch.png" style="display: inline-block; width:40px; top: 11.5px;  line-height: 0.54643 !important; position: relative; padding-left: 3px; padding-right: 3px; padding-bottom: 1px; padding-top: 1px; border: none; outline: none; box-shadow: none;"/>
                    {!! Form::close() !!}
                </div>
            </th>
        </table>

        <div class="table-responsive" style="width:100%; margin: auto;">

        </div>


        <!-- O PINAKAS -->

        <div id="newsfeed">
            <header>
                <section class="features" style="padding-top: 0 !important;">
                    <br/>
                        @if ($profile->coverImg != null)
                                    <div style="margin-top: -1%; box-shadow: 1px 1px 50px gray; margin-left: -50%; margin-right: -50%; background-image: url({{asset('public/uploads/users/'.$profile->userid.'/profile/cover/'.$profile->coverImg)}});
                            background-position: center; background-repeat: no-repeat;  background-color: #151515;">
                                @else
                                    <div style="margin-top: -1%; box-shadow: 1px 1px 50px gray; margin-left: -50%; margin-right: -50%; background-image: url('https://images.wallpaperscraft.com/image/bulb_lighting_rope_130830_2048x1152.jpg');
                            background-position: center; background-repeat: no-repeat;  background-color: #151515;">
                        @endif

                        <br/>
                        <br/>
                        <h2 id="covertitle" style="text-align: center; color: white; letter-spacing: 10px;">PROFILE</h2>

                        @if (Auth::check())
                        @if (Auth::id() == $profile->userid)
                            {!! Form::open(['url'=>'profileEdit', 'files' => true]) !!}
                            <button id="editcoverimg_btn" class="btn btn-primary" type="button" style="text-align: center; padding: 10px; margin-left: -15px;" onclick="document.getElementById('changeCoverImg').click();">Change cover image</button>
                            <input type="file" name="coverImg" id="changeCoverImg" class="form-control" style="display: none;"/>
                        @endif
                        @endif
                        <br/>
                        <h5 style='border-bottom: 1px solid #d1cccc; margin-top:2%;'></h5>
                    </div>
                        <br/>
                            @if($profile == null)
                                                <div id="aboutbox" style="box-shadow: 1px 1px 20px gray; width: 40%; margin: auto;">
                            <div id="profilecontent">
                            <h3 style="text-align: center; margin-top:3.5%; margin-bottom: 2%; padding: 2%; font-weight: bold; color: #484848; box-shadow: 0 2px 2px -2px gray; margin-left: 5%; margin-right: 5%;">ABOUT</h3>
                            <h6 style="text-align: justify; word-wrap: anywhere; margin-left: 5%; color: #767575; margin-right: 5%; ">Here you can see the profile what is about with a small description
                            </h6>
                            <br/>
                            <table id="profilestats" class="table-responsive" style="margin-left: 5%; width: 100%; border: 0; margin-right: 5%;">
                                <tr>
                                    <th>
                                        <h4 style="text-align: left !important; color: #484848; font-weight: bold;">Date Joined: </h4>
                                    </th>
                                    <th>
                                        <h4 style="text-align: center; !important; color: #484848;">01 Jan 2020</h4>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <h4 style="text-align: left !important; font-weight: bold; color: #484848;">Articles: </h4>
                                    </th>
                                    <th>
                                        <h4 style="text-align: center; !important; color: #484848;">0</h4>
                                    </th>
                                </tr>
                            </table>
                            </div>
                            @else

                                                                <div class="profimg_wrap">
                                                                @if ($profile->profilePic != null)
                                                                    <img id="profileimage" style="max-width: 300px; border-radius: 50%;" type='image' src="{{asset('public/uploads/users/'.$profile->userid.'/profile/photo/'.$profile->profilePic)}}">
                                                                @else
                                                                    <img id="profileimage" style="max-width: 300px; border-radius: 50%;" type='image' src="https://vimcare.com/assets/empty_user-e28be29d09f6ea715f3916ebebb525103ea068eea8842da42b414206c2523d01.png">
                                                                @endif
                                                            @if (Auth::check())
                                                                @if (Auth::id() == $profile->userid)
                                                                            <button id="profimg_description" class="btn btn-primary" type="button" style="width: 100%; border-radius: 50%;" onclick="document.getElementById('changeProfilePic').click();">Change profile picture</button>
                                                                </div>
                                                                            <input type="file" name="profilePic" id="changeProfilePic" class="form-control" style="display: none;"/>
                                                                <img id="profileimage" style="max-width: 300px; border-radius: 50%;" type='image' src="">
                                                                @else </div> @endif
                                                            @else </div> @endif


                                                        <div id="aboutbox" style="box-shadow: 1px 1px 20px gray; width: 40%; margin: auto;">
                                <div id="profilecontent">
                                    <h3 style="text-align: center; margin-top:3.5%; margin-bottom: 2%; padding: 2%; font-weight: bold; color: #484848; box-shadow: 0 2px 2px -2px gray; margin-left: 5%; margin-right: 5%;">ABOUT</h3>
                                    @if (Auth::check())
                                    @if (Auth::id() == $profile->userid)
                                        <label style="color: #484848; font-weight: bold;">Name:</label>
                                        <input class="form-control" name="name" style="text-align: justify; max-width: 90%; word-wrap: anywhere; margin-left: 5%; color: #767575; margin-right: 5%;" value="{{$profile->name}}">
                                        <br/>
                                        <label style="color: #484848; font-weight: bold;">Bio:</label>
                                        <textarea class="form-control" name="bio2" style="display: none; text-align: justify; max-width: 90%; margin-left: 5%; color: #767575; margin-right: 5%;" rows="5">{{$profile->about}}</textarea>
                                        <textarea class="form-control" name="bio" style="text-align: justify; max-width: 90%; margin-left: 5%; color: #767575; margin-right: 5%;" rows="5">{{$profile->about}}</textarea>
                                        <button class="btn btn-primary" style="text-align: center; padding: 10px; margin-top: 28px; margin-bottom: 5%; width: 120px;" type="submit" value="Submit">Save</button>
                                        {!! Form::close() !!}
                                    @else
                                        <h6 style="text-align: justify; word-wrap: anywhere; margin-left: 5%; color: #767575; margin-right: 5%; ">{{$profile->about}}</h6>
                                    @endif
                                    @else
                                        <label style="color: #484848; font-weight: bold;">Name:</label>
                                        <p name="name" style="text-align: justify; max-width: 90%; word-wrap: anywhere; margin-left: 5%; color: #767575; margin-right: 5%;" >{{$profile->name}}</p>
                                        <br/>
                                        <label style="color: #484848; font-weight: bold;">Bio:</label>
                                        <p name="bio" style="text-align: justify; max-width: 90%; margin-left: 5%; color: #767575; margin-right: 5%;" >{{$profile->about}}</p>
                                    @endif
                                    <br/>
                                    <table id="profilestats" class="table-responsive" style="margin-left: 5%; width: 100%; border: 0; margin-right: 5%;">
                                        <tr>
                                            <th>
                                                <h4 style="text-align: left !important; color: #484848; font-weight: bold;">Date Joined: </h4>
                                            </th>
                                            <th>
                                                <h4 style="text-align: center; !important; color: #484848;">{{$profile->date_created}}</h4>
                                            </th>
                                        </tr>
                                        <tr>
                                            <th>
                                                <h4 style="text-align: left !important; font-weight: bold; color: #484848;">Articles: </h4>
                                            </th>
                                            <th>
                                                <h4 style="text-align: center; !important; color: #484848;">{{$profile->counted_blogs}}</h4>
                                            </th>
                                        </tr>
                                    </table>
                                </div>
                                @endif

                        </th>
                        </tbody>
                    </table>
                        </div>

                </section>
            </header>
        </div>

        <!-- TELOS PINAKA -->



    </newscolumn>
</div>

<div style="margin-top:700px;">

</div>
</body>

</html>
