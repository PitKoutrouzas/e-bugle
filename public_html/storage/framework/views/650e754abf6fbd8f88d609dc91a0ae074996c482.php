<!doctype html>
<!-- Na dimiourgisw form me collapsibles mesa kai na valw ena scroll mesa-->
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Merriweather" />
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" type="text/css" href="../../public/css/desktop/blogsboard_desktop.css">
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

    <?php if($agent->isDesktop()): ?>
        <link rel="stylesheet" href="<?php echo e(asset('css/desktop/blogsboard_desktop.css')); ?>">
    <?php elseif($agent->isTablet()): ?>
        <link rel="stylesheet" href="<?php echo e(asset('css/tablet/blogsboard_tablet.css')); ?>">
    <?php elseif($agent->isMobile()): ?>
        <link rel="stylesheet" href="<?php echo e(asset('css/mobile/blogsboard_mobile.css')); ?>">
    <?php else: ?>
        <link rel="stylesheet" href="<?php echo e(asset('css/desktop/blogsboard_desktop.css')); ?>">
    <?php endif; ?>

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
    <?php if($userLoggedArr["type"] > 1): ?>
        <latestnews class="latestnews">
        </latestnews>
<?php endif; ?>

<!-- These are the forms that are showed when the Add,Edit,Delete News buttons are clicked -->

    <newscolumn class="newscolumn" id="newscolumn" style="">

        <?php
        //        $newschange = $_GET['newschange'];
        ?>

        <?php if($userLoggedArr["type"] > 1): ?>
            <div>
                <a class="btn btn-link" style="float: left; " href="<?php echo e(url("/blogsboard/". Auth::id())); ?>">Blogs</a>

                <text id="titlebread" style="float: left; margin-left: 5px; "></text>
                <br/><br/>
            </div>
            <div id="buttons" style="margin: 0 !important; display: inline-block;">
                <button type="button" align="left" style="width:190px; left: 0px;" class="btn btn-primary" id="addnews" onClick="addNew()"/> Create News</button>
                <button type="button" class="btn btn-primary" style="width:190px;" id="editnews" onClick="editNew()"/> Edit </button>
                <button type="button" class="btn btn-primary" style="width:190px;" id="deletenews" onClick="deleteNew()"/> Delete </button>
                <br/><br/>
            </div>
        <?php else: ?>
            <br/>
            <table id="header" class="table-responsive" style="width: 122%; margin-left: -15%; border: 0; margin-top: -10px;">
                <th style="width: 380px;">
                    <div>
                        <a href="<?php echo e(url('/blogsfeed')); ?>">
                        <img style="height: 70px; margin-left: 90px;" src="<?php echo e(config('app.logo')); ?>">
                        </a>
                        <br/>
                    </div>
                </th>
                <th <?php if(Auth::check()): ?> style="padding-right: 30px;" <?php else: ?> style="padding-right: 50px;" <?php endif; ?>>
                    <?php if(Auth::check()): ?>
                    <div>
                        <a id="blogslink" class="btn btn-link" style="float: left; text-decoration: none;  margin-left: -5%; font-size: 20px;" href="<?php echo e(url("/blogsboard/". Auth::id())); ?>">My Blogs</a>

                        <text id="titlebread" style="float: left; margin-left: 5px; "></text>
                        <br/>
                    </div>
                        <?php endif; ?>
                </th>

                <th <?php if(Auth::check()): ?> style="padding-right: 20px;" <?php else: ?> style="padding-right: 40px;" <?php endif; ?>>
                    <?php if(Auth::check()): ?>
                    <div>
                        <a id="profilelink" class="btn btn-link" href="<?php echo e(url("/profile/". Auth::id())); ?>" style="float: left; text-decoration: none; font-size: 20px;">My Profile</a>

                        <text id="titlebread2" style="float: left; margin-left: 5px; "></text>
                        <br/>
                    </div>
                        <?php endif; ?>
                </th>

                <?php if(Auth::guest()): ?>
                <th>
                    <div>
                        <a id="loginlink" class="btn btn-link" style="float: left; text-decoration: none;  font-size: 20px;" href="<?php echo e(url('/login')); ?>">Log In</a>

                        <text id="titlebread3" style="float: left; margin-left: 5px; "></text>
                        <br/>
                    </div>
                </th>
                <?php else: ?>
                    <th>
                        <div>
                            <a id="loginlink" class="btn btn-link" style="float: left; text-decoration: none;  font-size: 20px;" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Log out</a>

                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo e(csrf_field()); ?>

                            </form>
                            <br/>
                        </div>
                    </th>
                <?php endif; ?>
                <th id="searchth" style="text-align: right;">
                    <div id="searchbar" style="padding-bottom: 10px;">
                        <?php echo Form::open(['url'=>'blogsfeed']); ?>

                        <input id="searchinput" type="text" class="form-control" style="display: inline; font-weight: normal;" name="namesearch" placeholder="<find blogs with keywords>">

                        <input class="form-control" type="image" src="http://seiis.cut.ac.cy/~seiis_lab/iconsearch.png" style="display: inline-block; width:40px; top: 11.5px;  line-height: 0.54643 !important; position: relative; padding-left: 3px; padding-right: 3px; padding-bottom: 1px; padding-top: 1px; border: none; outline: none; box-shadow: none;"/>
                        <?php echo Form::close(); ?>

                    </div>
                </th>
            </table>
        <?php endif; ?>

        <div class="table-responsive" style="width:100%; margin: auto;">

        </div>


        <!-- O PINAKAS -->

        <div id="newsfeed">
            <header>
                <section class="features" style="padding-top: 0 !important;">
                    <br/>
                    <?php if(Auth::check()): ?>
                        <?php if($profile->coverImg != null): ?>
                            <div style="margin-top: -1%; box-shadow: 1px 1px 50px gray; margin-left: -50%; margin-right: -50%; background-image: url(<?php echo e(asset('uploads/users/'.$profile->userid.'/profile/cover/'.$profile->coverImg)); ?>);
                                    background-position: center; background-repeat: no-repeat;  background-color: #151515;">
                                <?php else: ?>
                                    <div style="margin-top: -1%; box-shadow: 1px 1px 50px gray; margin-left: -50%; margin-right: -50%; background-image: url('https://images.wallpaperscraft.com/image/bulb_lighting_rope_130830_2048x1152.jpg');
                            background-position: center; background-repeat: no-repeat;  background-color: #151515;">
                                        <?php endif; ?>
                                        <?php else: ?>
                                            <div style="margin-top: -1%; box-shadow: 1px 1px 50px gray; margin-left: -50%; margin-right: -50%; background-image: url('https://images.wallpaperscraft.com/image/bulb_lighting_rope_130830_2048x1152.jpg');
                            background-position: center; background-repeat: no-repeat;  background-color: #151515;">
                                                <?php endif; ?>

                                                <br/>
                        <br/>
                        <h2 id="covertitle" style="text-align: center; color: white; letter-spacing: 2px; max-width: 100%;"><?php echo e($profile->name); ?> Blogs</h2>
                        <br/>
                        <?php if(Auth::check()): ?>
                                                    <?php if(Auth::id() == $profile->userid): ?>
                        <a id="newblogbtn" href="<?php echo e(url('/blog/0')); ?>" class="btn btn-info btn-lg" style="color: white !important;">
                            <span class="glyphicon glyphicon-plus"></span> New Blog
                        </a>
                                                        <?php endif; ?>




                        <?php endif; ?>
                        <h5 style='border-bottom: 1px solid #d1cccc; margin-top:2%;'></h5>
                    </div>



                    <?php if($profile==null): ?>
                        <div id="profilebox" style="box-shadow: 1px 1px 20px gray; width: 25%; margin-top: -15%; margin-left: -15%; position: absolute; background-color: ghostwhite" >
                            <div style="max-width: 100%; background-color: #151515;">
                                <img type='image' src="" style="max-width: 100%;">
                            </div>
                            <h3 style="text-align: center; margin-top: 3%; font-weight: bold; color: #484848; box-shadow: 0 2px 2px -2px gray; margin-left: 5%; margin-right: 5%;">ABOUT</h3>
                            <h6 style="text-align: justify; margin-left: 5%; color: #767575; margin-right: 5%; ">
                                Here you can see the profile what is about with a small description
                            </h6>
                            <br/>
                            <table class="table-responsive" style="width: 100%; margin-left: 5%; margin-right: 5%;">
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
                            <br/>
                        </div>
                    <?php else: ?>
                        <div id="profilebox" style="box-shadow: 1px 1px 20px gray; width: 25%; margin-top: -15%; margin-left: -15%; position: absolute; background-color: ghostwhite" >
                            <div style="max-width: 100%; background-color: #151515;">
                                <?php if($profile->profilePic != null): ?>
                                    <img id="profileimage" style="max-width: 100%;" type='image' src="<?php echo e(asset('uploads/users/'.$profile->userid.'/profile/photo/'.$profile->profilePic)); ?>">
                                <?php else: ?>
                                    <img id="profileimage" style="max-width: 100%;" type='image' src="">
                                <?php endif; ?>

                                <?php if(Auth::check()): ?>
                                    <?php if(Auth::id() == $profile->userid): ?>
                                        <a href="<?php echo e(url("/profile/". Auth::id())); ?>">
                                            <button class="btn btn-primary" type="button" style="width: 100%; height: 50px; font-size: 15px;">EDIT PROFILE</button>
                                        </a>
                                    <?php endif; ?>
                                <?php endif; ?>
                            </div>
                            <h3 style="text-align: center; margin-top: 3%; font-weight: bold; color: #484848; box-shadow: 0 2px 2px -2px gray; margin-left: 5%; margin-right: 5%;">ABOUT</h3>
                            <h6 style="text-align: justify; margin-left: 5%; color: #767575; margin-right: 5%; ">
                                <?php echo e($profile->about); ?>

                            </h6>
                            <br/>
                            <table class="table-responsive" style="width: 100%; margin-left: 5%; margin-right: 5%;">
                                <tr>
                                    <th>
                                        <h4 style="text-align: left !important; color: #484848; font-weight: bold;">Date Joined: </h4>
                                    </th>
                                    <th>
                                        <h4 style="text-align: center; !important; color: #484848;"><?php echo e($profile->date_created); ?></h4>
                                    </th>
                                </tr>
                                <tr>
                                    <th>
                                        <h4 style="text-align: left !important; font-weight: bold; color: #484848;">Blogs: </h4>
                                    </th>
                                    <th>
                                        <h4 style="text-align: center; !important; color: #484848;"><?php echo e($profile->counted_blogs); ?></h4>
                                    </th>
                                </tr>
                            </table>
                            <br/>
                        </div>
                    <?php endif; ?>


                    <div id="blogsfeed" style="max-height: 2000px;">
                        <br/>
                        <div class="wrapper" >

                            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="feature" style="width: 100%; align-content: center;">
                                    <div class="ficon" style="position: relative; text-align: center; color: white; margin-right: 0;">


                                    </div>

                                    <a href="<?php echo e(url("blog/".$blog->id)); ?>" style=" text-decoration: none;">
                                        <div href="<?php echo e(url("blog/".$blog->id)); ?>" class="details_exp" style="text-align: left; cursor: pointer;" onClick="location.href = '<?php echo e($blog); ?>'">
                                            <h3 class="formatted_title" style=" text-decoration: none;" value="<?php echo e($blog->formatted_blogTitle); ?>"></h3>
                                            <table class="table-responsive" style="border: none;">
                                                <th style="width: 50%; padding-right: 30px;">
                                                    <?php if($blog->imgUpload != null): ?>
                                                        <img class="blogImg" src="<?php echo e(asset('uploads/users/'.$profile->userid.'/blogs/'.$blog->imgUpload)); ?>" alt="" style="padding-right: 50%; max-height: 300px;"/>
                                                    <?php else: ?>
                                                        <img class="blogImg" src="https://www.finelawn.co.nz/wp-content/uploads/2014/12/600x250.gif" alt="" style="padding-right: 50%; max-height: 300px;"/>
                                                    <?php endif; ?>
                                                </th>
                                                <th>

                                                    <h4 class="formatted_description" value="<?php echo e($blog->formatted_description); ?>" style="text-decoration: none; text-align: justify;">

                                                    </h4>


                                                    more details<span>→</span>
                                                    <br/><br/>
                                                    <h5><span class="glyphicon glyphicon-time"></span> <?php echo e($blog->formatted_created_at); ?>

                                                        <?php if($blog->formatted_updated_at !== $blog->formatted_created_at): ?>
                                                            (updated: <?php echo e($blog->formatted_updated_at); ?>)
                                                        <?php endif; ?><br/> <a href="<?php echo e(url("/blogsboard/". $blog->userid)); ?>"> <span class="glyphicon glyphicon-user"></span> <?php echo e($blog->name); ?> </a> </h5>
                                                </th>
                                            </table>



                                        </div>
                                    </a>

                                </div>
                                <br/>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php if($blogs instanceof \Illuminate\Pagination\LengthAwarePaginator): ?>
                                <?php echo e($blogs->links("pagination::default")); ?>

                            <?php endif; ?>
                            <script>highlightKeywords();</script>
                        </div>
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
