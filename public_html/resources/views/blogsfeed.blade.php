<!doctype html>
<!-- Na dimiourgisw form me collapsibles mesa kai na valw ena scroll mesa-->
<html>
<head>
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Merriweather" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="../../public/css/desktop/blogsfeed_desktop.css">
    <link rel="shortcut icon" type="img/svg" href="{{ asset('ebuglefaviconlogo.svg') }}">
    <style type="text/css">

        /*----footer css-----*/

        #footer {
            left: 0;
            bottom: 0;
            height: 100px;
            width: 100%;
            overflow: hidden;            /* Footer height */
        }

        /*------------------*/

        .hrclass{
            color: #A9E2F3;
        }

        a{
            color: #4C4C4C !important;
            line-height: 1.6 !important;
            text-decoration: none;
        }

        h3 { font-size: 28px !important; letter-spacing: 0.25px !important;}

        h4 { font-size: 17px !important;}

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

        a:hover {
            color: #ebc349 !important;
        }

        textarea:focus {
            border-color: #ebc349 !important;
        }

        input:focus {
            border-color: #ebc348 !important;
        }

        .bubble {
            border-radius: 0%;
            font-weight: bold;
            font-family: "Open Sans", serif;
            color: #2a2a2a;
            border-color: #f6dfb1;
            /*border-style: solid;*/
            /*border-bottom-style: double;*/
            border-bottom-style: solid;
            margin-top: -27px;
        }

        .bubblecategory {
            display: inline-block;
            transition: all .5s;
            font-weight: bold;
            color: #333;
            border-color: #f6dfb1;
            padding-top: 30px;
            line-height: 300%;
            /*border-style: solid;*/
            /*border-bottom-style: double;*/
            /*border-top-style: solid;*/
        }

        .bubblecategory:hover {
            cursor: pointer;
            transform: scale(1.25); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
        }

        .bubbletrumpet {
            width: 1.75%;
            margin-top: -5px;
            margin-right: -8px;
            transform: scaleX(-1);
        }

        .selectedcategory{
            color: #d6981e7d !important;
        }

    </style>
    <meta charset="utf-8">
    <!-- Latest compiled JavaScript -->

    <!-- Latest compiled and minified CSS -->

    @if ($agent->isDesktop())
        <link rel="stylesheet" href="{{asset('css/desktop/blogsfeed_desktop.css')}}">
    @elseif ($agent->isTablet())
        <link rel="stylesheet" href="{{asset('css/tablet/blogsfeed_tablet.css')}}">
    @elseif ($agent->isMobile())
        <link rel="stylesheet" href="{{asset('css/mobile/blogsfeed_mobile.css')}}">
    @else
        <link rel="stylesheet" href="{{asset('css/desktop/blogsfeed_desktop.css')}}">
    @endif

    <link rel="stylesheet" type="text/css" href="main_responsive.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="base.css">
    <link rel="stylesheet" href="skeleton.css">
    <link rel="stylesheet" href="layout.css">
    <link rel="stylesheet" type="text/css" href="resetCrafty.css">
    <link rel="stylesheet" type="text/css" href="main_responsive.css">

    <link rel="stylesheet" href="{{asset('css/blog_stories.css')}}">
    <link rel="stylesheet" href="{{asset('css/horizontal_scrolling.css')}}">

    <!-- jQuery library -->

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!-- Latest compiled JavaScript -->

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
<title>E-Bugle</title>
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
    @if($userLoggedArr["type"] > 1)
        <latestnews class="latestnews">
        </latestnews>
@endif

<!-- These are the forms that are showed when the Add,Edit,Delete News buttons are clicked -->

    <newscolumn class="newscolumn" id="newscolumn" style="">

        <?php
        //        $newschange = $_GET['newschange'];
        ?>

        @if($userLoggedArr["type"] > 1)
            <div>
                <a class="btn btn-link" style="float: left; " href="{{url("/blogsboard/". Auth::id())}}">My Blog</a>

                <text id="titlebread" style="float: left; margin-left: 5px; "></text>
                <br/><br/>
            </div>
            <div id="buttons" style="margin: 0 !important; display: inline-block;">
                <button type="button" align="left" style="width:190px; left: 0px;" class="btn btn-primary" id="addnews" onClick="addNew()"/> Create News</button>
                <button type="button" class="btn btn-primary" style="width:190px;" id="editnews" onClick="editNew()"/> Edit </button>
                <button type="button" class="btn btn-primary" style="width:190px;" id="deletenews" onClick="deleteNew()"/> Delete </button>
                <br/><br/>
            </div>
        @else
            @include('navbar')
        @endif
        @include('navbar_mobile')

        <div class="table-responsive" style="width:100%; margin: auto;">

        </div>


        <!-- O PINAKAS -->

        <div id="newsfeed" style="min-height: 1000px;">
            <header>
                <section class="features" style="padding-top: 0 !important;">
                    <br/><br/>
                    @if (Auth::check())
                        @if ($profile->coverImg != null)
                           <div>
                                @else
                                   <div>
                                        @endif
                                        @else
                                           <div>
                                                @endif

                                                <br/>
                                                <br/>

                                               @if (count($blogs) > 5)
                                                   <p id="covertitle" style="float: left; text-align: left; margin-top: -1%; font-size: 38px; font-weight: bold; max-width: 100%; line-height: 1.3; letter-spacing: 2px; margin-left: 0;">Top Articles</p>
                                                @if (Auth::check())
                                                <a style="text-decoration: none;">
                                                <p id="covertitle" onclick="location.href='{{ url("blog/0") }}'" style="float: right; margin-top: 0.8%; margin-right: 1%; font-weight: bold; color: #ebc248; cursor: pointer; font-size: 22px; font-weight: bold; max-width: 100%; line-height: 1.3; letter-spacing: 0.7px; margin-left: 0;"><span class="glyphicon glyphicon-plus"></span> New Article</p>
                                                </a>
                                                @endif

                                                <div class="grid-container">
                                                    <main class="grid-item main" style="background-color: white;">
                                                        <div id="more_blogs" class="items" style="margin-left: 2%;">
                                                            <table id="storyblogs_table" style="table-layout: fixed;">
                                                                @foreach($blogs as $mb_index => $blog)
                                                                    @if ($mb_index < 10)
                                                                        <th class="storyblog_th">
                                                                            <div class="more_blog | item">
                                                                                <div id="middle_part" onclick="location.href='{{url("/blogsboard/". $blog->userid)}}';" style="cursor: pointer;"><img id="middle_part_profile" src="{{asset('uploads/users/'.$blog->userid.'/profile/photo/'.$blog->profilePic)}}" style="object-fit: cover; width: 88%; height: 88%;"></div>
                                                                                <div id="top_part" onclick="location.href='{{url("/blog/". $blog->id)}}';" style="cursor: pointer;"><img src="{{asset('uploads/users/'.$blog->userid.'/blogs/'.$blog->imgUpload)}}" draggable="false" style="width: 100%; user-select: none; height: 210px; object-fit: cover; border-radius: 10%; opacity: 80%; pointer-events: none;"> </div>
                                                                                <div id="bottom_part" onclick="location.href='{{url("/blog/". $blog->id)}}';" style="cursor: pointer;"><p id="bottom_part_description" style="">{{$blog->blogTitle}}</p></div>
                                                                            </div>
                                                                        </th>
                                                                    @endif
                                                                @endforeach
                                                            </table>
                                                        </div>
                                                    </main>
                                                </div>
                                                   <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
                                                   @else
                                                   <p id="covertitle" style="text-align: center; font-size: 53px; font-weight: bold; letter-spacing: 2px; max-width: 100%; padding-top: 35px; padding-bottom: 15px; line-height: 1.3;">Top Articles</p>
                                                   @if (Auth::check())
                                                   <a style="text-decoration: none;">
                                                       <p id="covertitle" onclick="location.href='{{ url("blog/0") }}'" style="float: right; margin-top: 0.8%; margin-right: 1%; font-weight: bold; color: #ebc248; cursor: pointer; font-size: 22px; font-weight: bold; max-width: 100%; line-height: 1.3; letter-spacing: 0.7px; margin-left: 0;"><span class="glyphicon glyphicon-plus"></span> New Article</p>
                                                   </a>
                                                   @endif
                                                   <h5 id="titleline" style="border-bottom: 1px solid #d1cccc;"></h5>
                                               @endif



                                                <div class="bubble">
                                                    {{--                                                    <img class="bubbletrumpet" src="{{asset('ebuglefaviconlogo.svg')}}">--}}
                                                    <div id="arts_category" class="bubblecategory @if(isset($category)) @if($category==1) selectedcategory @endif @endif" onclick="location.href='{{ url("blogsfeed/1") }}'" style="width: 210px;">
                                                        <p style="text-align: center;">Arts & Entertainment</p>
                                                    </div>
                                                    {{--                                                    <img class="bubbletrumpet" src="{{asset('ebuglefaviconlogo.svg')}}">--}}
                                                    <div id="business_category" class="bubblecategory @if(isset($category)) @if($category==2) selectedcategory @endif @endif" onclick="location.href='{{ url("blogsfeed/2") }}'" style="width: 200px;">
                                                        <p style="text-align: center;">Business & Finance</p>
                                                    </div>

                                                    <div id="health_category" class="bubblecategory @if(isset($category)) @if($category==4) selectedcategory @endif @endif" onclick="location.href='{{ url("blogsfeed/4") }}'" style="width: 85px;">
                                                        <p style="text-align: center;">Health</p>
                                                    </div>

                                                    <div id="social_category" class="bubblecategory @if(isset($category)) @if($category==6) selectedcategory @endif @endif" onclick="location.href='{{ url("blogsfeed/6") }}'" style="width: 75px;">
                                                        <p style="text-align: center;">Social</p>
                                                    </div>

                                                    <div id="sciencetech_category" class="bubblecategory @if(isset($category)) @if($category==3) selectedcategory @endif @endif" onclick="location.href='{{ url("blogsfeed/3") }}'" style="width: 160px;">
                                                        <p style="text-align: center;">Science & Tech</p>
                                                    </div>
                                                    <div id="travel_category" class="bubblecategory @if(isset($category)) @if($category==5) selectedcategory @endif @endif" onclick="location.href='{{ url("blogsfeed/5") }}'" style="width: 75px;">
                                                        <p style="text-align: center;">Travel</p>
                                                    </div>
                                                    <div id="thoughts_category" class="bubblecategory @if(isset($category)) @if($category==7) selectedcategory @endif @endif" onclick="location.href='{{ url("blogsfeed/7") }}'" style="width: 105px;">
                                                        <p style="text-align: center;">Thoughts</p>
                                                    </div>


                                                </div>
                                            </div>


                                            <div id="blogsfeed" style="margin-top: -2%;">
                                                <br/>
                                                <div class="wrapper" >

                                                    @foreach($blogs as $blog)
                                                        <div class="feature" style="width: 100%; align-content: center;">
                                                            <div class="ficon" style="position: relative; text-align: center; color: white; margin-right: 0;">


                                                            </div>


                                                                <div onclick="location.href='{{ url("blog/".$blog->id) }}'" class="details_exp" style="text-align: left; cursor: pointer;">
                                                                    <a style=" text-decoration: none;">
                                                                    <h3 class="formatted_title" style="text-decoration: none; font-weight: bold;" value="{{$blog->formatted_blogTitle}}"></h3>

                                                                    <table class="table-responsive" style="border: none;">
                                                                        <th style="width: 50%; padding-right: 30px;">
                                                                            @if ($blog->imgUpload != null)
                                                                                <img class="blogImg" src="{{asset('uploads/users/'.$blog->userid.'/blogs/'.$blog->imgUpload)}}" alt="" style="padding-right: 50%; max-height: 300px;"/>
                                                                            @else
                                                                                <img class="blogImg" src="https://www.finelawn.co.nz/wp-content/uploads/2014/12/600x250.gif" alt="" style="padding-right: 50%; max-height: 300px;"/>
                                                                            @endif
                                                                        </th>
                                                                        <th>

                                                                            <p onclick="event.stopPropagation(); location.href='{{ url("blogsfeed/". $blog->category) }}';" style="color: #caa2527d; font-size: 17px;">{{$blog->categoryName}}</p>
                                                                                <h4 class="formatted_description" value="{{$blog->formatted_description}}" style="text-decoration: none;">

                                                                            </h4>


                                                                            more details<span>→</span>
                                                                            <br/><br/>
                                                                            <h5 id="blog_details"><span class="glyphicon glyphicon-time"></span> {{$blog->formatted_created_at}}
                                                                                @if ($blog->formatted_updated_at !== $blog->formatted_created_at)
                                                                                    (updated: {{$blog->formatted_updated_at}})
                                                                                @endif<br/> <a href="{{url("/blogsboard/". $blog->userid)}}"><span class="glyphicon glyphicon-user"></span> {{$blog->name}} </a></h5>
                                                                        </th>
                                                                    </table>


                                                                    </a>
                                                                </div>


                                                        </div>
                                                        <br/>
                                                    @endforeach

                                                    @if ($blogs instanceof \Illuminate\Pagination\LengthAwarePaginator)
                                                        {{$blogs->links("pagination::default")}}
                                                    @endif

                                                    <script>highlightKeywords();</script>
                                                </div>
                                            </div>
                </section>
            </header>
        </div>

        <!-- TELOS PINAKA -->

        <br/>
        <div id="footer_bottom" style="position: absolute; margin-left: -21.5%; margin-top: 12%">
            @include('footer')
        </div>

    </newscolumn>

</div>



</body>

<script>
    const slider = document.querySelector(".items");
    let isDown = false;
    let startX;
    let scrollLeft;

    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener('mouseleave', () => {
        isDown = false;
        slider.classList.remove('active');
    });
    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('active');
    });
    slider.addEventListener('mousemove', (e) => {
        if(!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 3; //scroll-fast
        slider.scrollLeft = scrollLeft - walk;
    });
    slider.addEventListener('mousedown', (e) => {
        isDown = true;
        slider.classList.add('active');
        startX = e.pageX - slider.offsetLeft;
        scrollLeft = slider.scrollLeft;
    });
    slider.addEventListener('mouseleave', () => {
        isDown = false;
        slider.classList.remove('active');
    });
    slider.addEventListener('mouseup', () => {
        isDown = false;
        slider.classList.remove('active');
    });
    slider.addEventListener('mousemove', (e) => {
        if(!isDown) return;
        e.preventDefault();
        const x = e.pageX - slider.offsetLeft;
        const walk = (x - startX) * 3; //scroll-fast
        slider.scrollLeft = scrollLeft - walk;
    });

    // slider.addEventListener('touchstart', (e) => {
    //     isDown = true;
    //     slider.classList.add('active');
    //     startX = e.pageX - slider.offsetLeft;
    //     scrollLeft = slider.scrollLeft;
    //     // alert("touch start");
    // });
    // slider.addEventListener('touchend', () => {
    //     isDown = false;
    //     slider.classList.remove('active');
    //     // alert("touch end");
    // });
    // slider.addEventListener('touchcancel', () => {
    //     isDown = false;
    //     slider.classList.remove('active');
    //     // alert("touch cancel");
    // });
    // slider.addEventListener('touchmove', (e) => {
    //     if(!isDown) return;
    //     e.preventDefault();
    //     const x = e.pageX - slider.offsetLeft;
    //     const walk = (x - startX) * 3; //scroll-fast
    //     slider.scrollLeft = scrollLeft - walk;
    //     // alert("touch move");
    // });
</script>


</html>
