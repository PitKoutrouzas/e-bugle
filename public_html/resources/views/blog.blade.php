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
            width: 1000px !important;
            height: 600px !important;
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

        #tinymce_ifr {
            display: flex !important;
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
            height : 100%;
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

        .tox-tinymce{
            margin-left: 10% !important;
            margin-right: 10% !important;
            border: none;
        }

        .tox-notifications-container {
            display: none;
        }

        #searchbar{
            padding-bottom: 10px;
        }

        #searchinput{
            display: inline;
        }

        #newblogbtn,#editblogbtn,#deleteblogbtn {
            background-color: #5bc0de00 !important;
            border-color: #fff !important;
        }

        #newblogbtn:hover{
            color: #ebbf2a !important;
            font-size: 19px;
            border-color: #acacac !important;
        }

        #editblogbtn:hover {
            color: #f0cb52 !important;
        }

        #deleteblogbtn:hover {
            color: #d9534f !important;
        }

        #submit_blog_btn:hover {
            color: #e2ba47 !important;
            border-color: #e2ba47 !important;
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

    </style>
    <meta charset="utf-8">
    <!-- Latest compiled JavaScript -->


    <!-- Latest compiled and minified CSS -->

    @if ($agent->isDesktop())
        <link rel="stylesheet" href="{{asset('css/desktop/blog_desktop.css')}}">
    @elseif ($agent->isTablet())
        <link rel="stylesheet" href="{{asset('css/tablet/blog_tablet.css')}}">
    @elseif ($agent->isMobile())
        <link rel="stylesheet" href="{{asset('css/mobile/blog_mobile.css')}}">
    @else
        <link rel="stylesheet" href="{{asset('css/desktop/blog_desktop.css')}}">
    @endif

    <link rel="stylesheet" href="{{asset('css/more_blogs.css')}}">


    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>tinymce.init({selector:'textarea', height : "700", plugins: "link | lists | searchreplace | hr | media | table | insertdatetime | image imagetools | emoticons ",  menubar: "file | edit | format | insert", toolbar: "undo redo | bold italic forecolor backcolor align increase indent numlist bullist"}); </script>
    <!-- Latest compiled and minified CSS -->

    <link rel="stylesheet" type="text/css" href="main_responsive.css">
    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="base.css">
    <link rel="stylesheet" href="skeleton.css">
    <link rel="stylesheet" href="layout.css">
    <link rel="stylesheet" type="text/css" href="resetCrafty.css">
    <link rel="stylesheet" type="text/css" href="main_responsive.css">

    <!-- jQuery library -->

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

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
        function showBlogDetails()
        {
            document.getElementById("blogView").innerHTML = tinymce.get('tinymce').getContent();
            document.getElementById("blogContent").value = tinymce.get('tinymce').getContent();
            document.getElementById("blogTitle").innerHTML = document.getElementById("title").value;
            document.getElementById("editBlog").style.width = '100% !important';
        }
        function showContent(){
            var d1 = document.getElementById("descr");
            d1.insertAdjacentHTML('afterbegin', d1.getAttribute("value"));
        }
        function showEditBlog(){
            document.getElementById("editBlog").style.display = 'inline';
        }
        function editBlog(){
            document.getElementById("editBlog").style.display = 'inline';
            // document.getElementById("editorhead").focus();
            window.scrollTo({
                top: document.body.scrollHeight,
                left: 0,
                behavior: 'smooth'
            });
            document.getElementById("showBlog").style.display = 'none';
            document.getElementById("title").value = document.getElementById("newseditTitleHead").innerText;

            tinyMCE.activeEditor.setContent(document.getElementById("descr").innerHTML);
        }



    </script>

</head>


<body>
<!--HEADER START-->
@if(isset($blog))
    <title>{{$blog->blogTitle}}</title>
@else
    <title>New Article</title>
@endif
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

        <div class="modal fade" id="favoritesModal"
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

        <!-- END MODAL -->

        <?php
        //        $newschange = $_GET['newschange'];
        ?>

        @include('navbar')
        @include('navbar_mobile')


        <div class="table-responsive" style="width:100%; margin: auto;">

        </div>


        <!-- O PINAKAS -->

        <div id="newsfeed">
            <header>
                <section class="features" style="padding-top: 0 !important;">
                    <br/><br/>
                    @if (Auth::check())
                        @if (Auth::id() == $profile->userid)
                            @if ($profile->coverImg != null)
                            <div style="margin-top: -1%; box-shadow: 0 1px 50px gray; margin-left: -21.5%; margin-right: -21.5%;
                                    background-position: center; background-repeat: no-repeat;
                                     border-bottom: 3px double #f0cb52;">
                                <img src="{{asset('uploads/users/'.$profile->userid.'/profile/cover/'.$profile->coverImg)}}"
                                     style="object-fit: cover; width: 100%; height: 195px;">
                                @else
                                    <br/><br/>
                                    <div style="height: 100px; ">
{{--                                <img src="{{asset('uploads/users/'.$profile->userid.'/profile/cover/'.$profile->coverImg)}}"--}}
{{--                                     style="object-fit: cover; width: 100%; height: 195px;">--}}
                                        @endif
                                @else
                                    <div>
                                @endif
                                @else
                                            <div>
                                @endif

                        @if (isset($blog))
{{--                        <h2 id="covertitle" style="text-align: center; color: white;"></h2>--}}

                        @if (Auth::check())

                            @if (Auth::id() == $blog->userid)
                        <table id="head" class="table-responsive" style="left:200px; margin-left: 20%; margin-right: 50%; width: auto; border: none;">
                            <th class="titlehead" style="text-align:center; !important;">
                                <a id="newblogbtn" href="{{url('/blog/0')}}" class="btn btn-info btn-lg" style="letter-spacing: 0.5px;">
                                    <span class="glyphicon glyphicon-plus"></span> New Blog
                                </a>
                            </th>
                            <th id="editHead" style="padding: 10px;">
                                <a id="editblogbtn" class="btn btn-primary btn-lg" style="letter-spacing: 0.5px;" onclick="editBlog();">
                                    <span class="glyphicon glyphicon-pencil"></span> Edit
                                </a>
                            </th>
                            <th id="deleteHead">
                                <a id="deleteblogbtn" href="{{url("/blogsboardDelete/". $blog->id)}}" class="btn btn-danger btn-lg" style="letter-spacing: 0.5px;" >
                                    <span class="glyphicon glyphicon-trash"></span> Delete
                                </a>
                            </th>
                        </table>
                                @endif
                            @endif

                        @else
                            <h2 style="color: #484848; letter-spacing: 5px;">NEW BLOG</h2>
                        @endif
                    </div>
{{--                    <div style="box-shadow: 1px 1px 20px gray; width: 25%; margin-top: -15%; margin-left: -15%; position: absolute; background-color: ghostwhite" >--}}
{{--                        <div style="max-width: 100%; background-color: #151515;">--}}
{{--                            <img type='image' src="https://scontent.fnic4-1.fna.fbcdn.net/v/t1.0-9/26992201_10214525435471025_6407520401202927188_n.jpg?_nc_cat=102&_nc_ohc=mT3Xi3ZrZRsAQksBbKqjhyKZspU99PWF-A2cnYqTN9RDyIRt_jgkSkxzQ&_nc_ht=scontent.fnic4-1.fna&oh=9982edcb3cd4df714b12d4d3ed43c5ae&oe=5E675F73" style="max-width: 100%;">--}}
{{--                        </div>--}}
{{--                        <h3 style="text-align: center; font-weight: bold; color: #484848; box-shadow: 0 2px 2px -2px gray; margin-left: 5%; margin-top: 3%; margin-right: 5%;">ABOUT</h3>--}}
{{--                        <h6 style="text-align: justify; margin-left: 5%; color: #767575; margin-right: 5%; ">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.--}}
{{--                        </h6>--}}
{{--                        <br/>--}}
{{--                        <table class="table-responsive" style="width: 100%; margin-left: 5%; margin-right: 5%;">--}}
{{--                            <tr>--}}
{{--                                <th>--}}
{{--                                    <h4 style="text-align: left !important; color: #484848; font-weight: bold;">Date Joined: </h4>--}}
{{--                                </th>--}}
{{--                                <th>--}}
{{--                                    <h4 style="text-align: center; !important; color: #484848;">03 Jan 2020</h4>--}}
{{--                                </th>--}}
{{--                            </tr>--}}
{{--                            <tr>--}}
{{--                                <th>--}}
{{--                                    <h4 style="text-align: left !important; font-weight: bold; color: #484848;">Articles: </h4>--}}
{{--                                </th>--}}
{{--                                <th>--}}
{{--                                    <h4 style="text-align: center; !important; color: #484848;">7</h4>--}}
{{--                                </th>--}}
{{--                            </tr>--}}
{{--                        </table>--}}
{{--                        <br/>--}}
{{--                    </div>--}}
                    <div id="blogdescription" style="max-height: 2000px;">
                        <div id="showBlog" style="margin-left: -2%;">
                            @if (isset($blog))
                                <br/>
                                <h1 id="newseditTitleHead" style="font-weight: bold;"> {{$blog->blogTitle}}</h1>

                                <h5 id="titleline" style='border-bottom: 1px solid #d1cccc; margin-top:2%; margin-left: 11.7%; margin-right: 11.7%'></h5>

                                <div style="margin-bottom: 40px;">
                                    <div class="table-responsive">
                                        <table id="example" class="table"></table>
                                    </div>

                                    <p style="text-align: left; margin-left: 10%; font-size: small;"><span class="glyphicon glyphicon-user"></span><a href="{{url("/blogsboard/". $profile->userid)}}"> {{$blog->name}} </a><span class="glyphicon glyphicon-time" style="margin-left: 10px;"></span> {{date('j M Y H:i', strtotime($blog->updated_at))}}</p>
                                    <br/>
                                    @if ($blog->imgUpload !== null)
                                        <img class="newsimage" src="{{asset('uploads/users/'.$profile->userid.'/blogs/'.$blog->imgUpload)}}" name="descr_img" id="descr_img" style="max-width: 75%; max-height: 400px;"/></img>
                                        <br/><br/><br/>
                                    @endif
                                    <div id="descr" value="{{$blog->description}}" style="text-align:justify; left: 200px; margin-left: 10%; margin-right: 10%; font-size: 17px; white-space: pre-wrap;">


                                        <script>showContent();</script>

                                    </div>

                                    <div id="about_author" style="
width: 100%;
height: 300px;
padding: 5%;
margin-left: 5%;
text-align: left;
color: #4C4C4C;
letter-spacing: 0.5px;
margin-bottom: 10%;"><h2 id="title_about_author" style="
font-weight: bold;
letter-spacing: 0.5px;
padding-bottom: 2.5%;
font-size: 20px;">ABOUT THE AUTHOR</h2>
                                        <div id="profile_author" style="
float: left;
text-align: left;
position: absolute;
z-index: 5;"><div id="description_author" style="
position: absolute;
height: 100%;
width: 230%;
border-left: 1px solid #E1E9ED;"><h3 id="name_author" style="">{{$blog->name}}</h3><h4 id="title_author" style="">Writer</h4><h5 id="bio_author" style="">{{$profile->about}}</h5>
                                            </div><div class="profimg_wrap"><img src="{{asset('uploads/users/'.$profile->userid.'/profile/photo/'.$profile->profilePic)}}" style="object-fit: cover; width: 100%; height: 100%;"></div> </div></div>

                                    <br/><br/><br/><br/><br/><br/>

                                    <h1 style="text-align: center; color: #4C4C4C; font-size: 32px; letter-spacing: 0.5px; border-bottom: 1px solid #E1E9ED; padding: 20px;">
                                        MORE BLOGS</h1>


                                    <div id="more_blogs" style="margin-left: 2%;">
                                        <table id="more_blogs_table" class="table-responsive" style="table-layout: fixed; width: 100%;">
                                            @foreach($moreblogs as $mb_index => $moreblog)
                                                @if ($mb_index <= 2)
                                            <th>
                                                <div class="more_blog">
                                                    <div id="top_part" onclick="location.href='{{url("/blog/". $moreblog->id)}}';" style="cursor: pointer;"><img src="{{asset('uploads/users/'.$moreblog->userid.'/blogs/'.$moreblog->imgUpload)}}" style="width: 100%; height: 100%; object-fit: cover;"> </div>
                                                    <div id="middle_part" onclick="location.href='{{url("/blogsboard/". $moreblog->userid)}}';" style="cursor: pointer;"><img id="middle_part_profile" src="{{asset('uploads/users/'.$moreblog->userid.'/profile/photo/'.$moreblog->profilePic)}}" style="object-fit: cover; width: 85%; height: 85%;"></div>
                                                <div id="bottom_part" onclick="location.href='{{url("/blog/". $moreblog->id)}}';" style="cursor: pointer;"><p id="bottom_part_description">{{$moreblog->blogTitle}}</p></div>
{{--                                                <div id="stats_part"><table style="table-layout: fixed; width: 100%; font-size: 14px;">--}}
{{--                                                        <td id="stats_likes" class="more_blogs_stats"><span class="glyphicon glyphicon-heart" style="left: -7.5%;"></span>23</td>--}}
{{--                                                        <td id="stats_comments" class="more_blogs_stats"><span class="glyphicon glyphicon-comment" style="left: -7.5%;"></span>6</td>--}}
{{--                                                        <td id="stats_views" class="more_blogs_stats"><span class="glyphicon glyphicon-thumbs-up" style="left: -7.5%;"></span>187</td></table></div>--}}
                                                </div>
                                            </th>
                                                @elseif ($mb_index == 3)
                                                    <tr id="second_row_moreblogs">
                                                        <br/><br/>
                                                        <th>
                                                            <div class="more_blog">
                                                                <div id="top_part" onclick="location.href='{{url("/blog/". $moreblog->id)}}';" style="cursor: pointer;"><img src="{{asset('uploads/users/'.$moreblog->userid.'/blogs/'.$moreblog->imgUpload)}}" style="width: 100%; height: 100%; object-fit: cover;"> </div>
                                                                <div id="middle_part" onclick="location.href='{{url("/blogsboard/". $moreblog->userid)}}';" style="cursor: pointer;"><img id="middle_part_profile" src="{{asset('uploads/users/'.$moreblog->userid.'/profile/photo/'.$moreblog->profilePic)}}" style="object-fit: cover; width: 85%; height: 85%;"></div>
                                                                <div id="bottom_part" onclick="location.href='{{url("/blog/". $moreblog->id)}}';" style="cursor: pointer;"><p id="bottom_part_description">{{$moreblog->blogTitle}}</p></div>
{{--                                                                <div id="stats_part"><table style="table-layout: fixed; width: 100%; font-size: 14px;">--}}
{{--                                                                        <td id="stats_likes" class="more_blogs_stats"><span class="glyphicon glyphicon-heart" style="left: -7.5%;"></span>23</td>--}}
{{--                                                                        <td id="stats_comments" class="more_blogs_stats"><span class="glyphicon glyphicon-comment" style="left: -7.5%;"></span>6</td>--}}
{{--                                                                        <td id="stats_views" class="more_blogs_stats"><span class="glyphicon glyphicon-thumbs-up" style="left: -7.5%;"></span>187</td></table></div>--}}
                                                            </div>
                                                        </th>
                                                        @else
                                                            <th>
                                                                <div class="more_blog">
                                                                    <div id="top_part" onclick="location.href='{{url("/blog/". $moreblog->id)}}';" style="cursor: pointer;"><img src="{{asset('uploads/users/'.$moreblog->userid.'/blogs/'.$moreblog->imgUpload)}}" style="width: 100%; height: 100%; object-fit: cover;"> </div>
                                                                    <div id="middle_part" onclick="location.href='{{url("/blogsboard/". $moreblog->userid)}}';" style="cursor: pointer;"><img id="middle_part_profile" src="{{asset('uploads/users/'.$moreblog->userid.'/profile/photo/'.$moreblog->profilePic)}}" style="object-fit: cover; width: 85%; height: 85%;"></div>
                                                                    <div id="bottom_part" onclick="location.href='{{url("/blog/". $moreblog->id)}}';" style="cursor: pointer;"><p id="bottom_part_description">{{$moreblog->blogTitle}}</p></div>
{{--                                                                    <div id="stats_part"><table style="table-layout: fixed; width: 100%; font-size: 14px;">--}}
{{--                                                                            <td id="stats_likes" class="more_blogs_stats"><span class="glyphicon glyphicon-heart" style="left: -7.5%;"></span>23</td>--}}
{{--                                                                            <td id="stats_comments" class="more_blogs_stats"><span class="glyphicon glyphicon-comment" style="left: -7.5%;"></span>6</td>--}}
{{--                                                                            <td id="stats_views" class="more_blogs_stats"><span class="glyphicon glyphicon-thumbs-up" style="left: -7.5%;"></span>187</td></table></div>--}}
                                                                </div>
                                                            </th>
                                                        @endif
                                                @endforeach
                                                    </tr>
                                        </table>
                                    </div>

                                </div>
                                <div id="footer_margin0" style="position: relative; bottom: -100px;">
                                    @include('footer')
                                </div>
                            @endif


                        </div>

                        <div id="editBlog" style="display: none;">
                            @if(!isset($blog))
                                <script>showEditBlog();</script>
                                {!! Form::open(array('url'=>'blogsboardCreate', 'files' => true)) !!}
                            @else
                                {!! Form::open(array('url'=>'blogsboardEdit/'.$blog->id, 'files' => true)) !!}
                            @endif
                            <input type="hidden" name="blogContent" id="blogContent" value="">
                            <br/>
                            <div style="text-align: center; letter-spacing: 20px; color: #484848; font-weight: bold;">PREVIEW</div>
                            <br/>
                            <div>
                                <h1 id="blogTitle" style="font-weight: bold;"></h1>
                                <h5 id="titleline" style='border-bottom: 1px solid #d1cccc; margin-top:2%; margin-left: 11.7%; margin-right: 11.7%'></h5>
                            </div>
                            <br/><br/>
                            <div type="text" id="blogView" name="blogView" value="gfd" class="feature" style="text-align:justify; left: 200px; margin-left: 10%; margin-right: 10%; font-size: 17px; white-space: pre-wrap;">
                            </div>
                            <script>setInterval(showBlogDetails, 2500)</script>

                            <br/>
                                <br/>

{{--                            <table id="editorhead" class="table-responsive" style="left:200px; margin-left: 10%; margin-right: 10%; border: none;">--}}
{{--                                <th style="width: 1000px; padding: 10px; padding-left: 0px;">--}}
{{--                                    <p>Title: </p><input type="text" name="title" id="title" class="form-control">--}}
{{--                                </th>--}}
{{--                                <th style="width: 1250px; padding: 10px; padding-left: 0px;">--}}
{{--                                    <label for="form-file">Upload cover photo:</label>--}}
{{--                                    <input type="file" name="newsImg" id="form-file" class="form-control" style="margin-top: 5px; "/>--}}
{{--                                </th>--}}
{{--                                <th style="width: 100px">--}}
{{--                                    <p>  </p><button class="btn btn-primary" style="text-align: center; padding: 10px; margin-top: 28px; width: 120px;" type="submit" value="Submit">Submit</button>--}}
{{--                                </th>--}}
{{--                            </table>--}}

                                <div id="editorhead" style="width: 80%; margin-left: 10%; margin-right: 10%; letter-spacing: 2px; text-align: left;">

                                        <label>Title: </label><input type="text" name="title" id="title" class="form-control">


                                <label for="form-file" style="padding-top: 10px;">Upload cover photo:</label>
                                        <input type="file" name="newsImg" id="form-file" class="form-control" style="margin-top: 5px; margin-bottom: 20px;"/>


                                </div>

                            <textarea id="tinymce" class="tinymce" >

                                            </textarea>

                                <button id="submit_blog_btn" class="btn btn-primary" style="text-align: center; padding: 10px; margin-top: 28px; margin-bottom: 5%; width: 120px; color: #484848; background-color: #5bc0de00 !important; border-color: #a0a0a0; letter-spacing: 0.5px; font-size: 18px;" type="submit" value="Submit">Submit</button>
                            {!! Form::close() !!}

                                <br/><br/><br/><br/><br/>
                                <div id="footer_margin" style="position: relative; bottom: -100px; width: 100vw;">
                                    @include('footer')
                                </div>
                        </div>

                    </div>
                </section>
            </header>
        </div>

        <!-- TELOS PINAKA -->

    <br/><br/><br/>

    </newscolumn>

</div>

<div style="margin-top:700px;">

</div>

</body>
<footer>
</footer>
</html>

