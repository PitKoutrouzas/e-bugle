<!doctype html>
<!-- Na dimiourgisw form me collapsibles mesa kai na valw ena scroll mesa-->
<html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
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
            width: 30.5%;
            margin-left: 38%;
        }

        #newblogbtn,#editblogbtn,#deleteblogbtn {
            background-color: #5bc0de00 !important;
            border-color: #fff !important;
        }

        #newblogbtn:hover{
            background-color: #5bc0de !important;
            border-color: #5bc0de !important;
        }

        #editblogbtn:hover {
            background-color: #3f823d !important;
            border-color: #3f823d !important;
        }

        #deleteblogbtn:hover {
            background-color: #d9534f !important;
            border-color: #d9534f !important;
        }

    </style>
    <meta charset="utf-8">
    <!-- Latest compiled JavaScript -->

    <title>Blogs</title>
    <!-- Latest compiled and minified CSS -->

    <?php if($agent->isDesktop()): ?>
        <link rel="stylesheet" href="<?php echo e(asset('css/desktop/blog_desktop.css')); ?>">
    <?php elseif($agent->isTablet()): ?>
        <link rel="stylesheet" href="<?php echo e(asset('css/tablet/blog_tablet.css')); ?>">
    <?php elseif($agent->isMobile()): ?>
        <link rel="stylesheet" href="<?php echo e(asset('css/mobile/blog_mobile.css')); ?>">
    <?php else: ?>
        <link rel="stylesheet" href="<?php echo e(asset('css/desktop/blog_desktop.css')); ?>">
    <?php endif; ?>

    <?php if(isset($blog)): ?>
        <title><?php echo e($blog->blogTitle); ?></title>
    <?php else: ?>
        <title>New Blog</title>
    <?php endif; ?>

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


        <br/>
        <table id="header" class="table-responsive" style="width: 122%; margin-left: -15%; border: 0;">
            <th>
                <div>
                    <a id="blogslink" class="btn btn-link" style="float: left; text-decoration: none;  margin-left: -5%; font-size: 20px;" href="<?php echo e(url("/blogsboard")); ?>">Blogs</a>

                    <text id="titlebread" style="float: left; margin-left: 5px; "></text>
                    <br/>
                </div>
            </th>
            <th>
                <div>
                    <a id="profilelink" class="btn btn-link" href="<?php echo e(url('/profile')); ?>" style="float: left; text-decoration: none; font-size: 20px;">Profile</a>

                    <text id="titlebread2" style="float: left; margin-left: 5px; "></text>
                    <br/>
                </div>
            </th>
            <th>
                <div>
                    <a id="loginlink" class="btn btn-link" style="float: left; text-decoration: none;  font-size: 20px;" href="#">Log in</a>

                    <text id="titlebread3" style="float: left; margin-left: 5px; "></text>
                    <br/>
                </div>
            </th>
            <th id="searchth" style="text-align: right;">
                <div id="searchbar" style="padding-bottom: 10px;">
                    <?php echo Form::open(['url'=>'blogsboard']); ?>

                    <input id="searchinput" type="text" class="form-control" style="display: inline; font-weight: normal;" name="namesearch" placeholder="<find blogs with keywords>">

                    <input class="form-control" type="image" src="http://seiis.cut.ac.cy/~seiis_lab/iconsearch.png" style="display: inline-block; width:40px; top: 11.5px;  line-height: 0.54643 !important; position: relative; padding-left: 3px; padding-right: 3px; padding-bottom: 1px; padding-top: 1px; border: none; outline: none; box-shadow: none;"/>
                    <?php echo Form::close(); ?>

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
                    <div style="margin-top: -1%; box-shadow: 1px 1px 50px gray; margin-left: -50%; margin-right: -50%; background-color: #151515; background-image: url('https://images.wallpaperscraft.com/image/bulb_lighting_rope_130830_2048x1152.jpg');
                     background-position: center; background-repeat: no-repeat;  ">

                        <br/>
                        <?php if(isset($blog)): ?>
                        <br/>

                        <br/>

                        <table id="head" class="table-responsive" style="left:200px; margin-top: -1%; margin-left: 30%; margin-right: 50%; width: auto; border: none; visibility: hidden;">
                            <th class="titlehead" style="text-align:center; !important; width: 100%; padding: 10px; padding-left: 0px;">
                                <a id="newblogbtn" href="<?php echo e(url('/blog/0')); ?>" class="btn btn-info btn-lg" style="color: white !important;">
                                    <span class="glyphicon glyphicon-plus"></span> New Blog
                                </a>
                            </th>
                            <th id="editHead" style="padding: 10px; padding-right: 650px;">
                                <a id="editblogbtn" class="btn btn-primary btn-lg" style="color: white !important; background-color: #3f823d; border-color: #3f823d;" onclick="editBlog();">
                                    <span class="glyphicon glyphicon-pencil"></span> Edit
                                </a>
                            </th>
                            <th id="deleteHead">
                                <a id="deleteblogbtn" href="<?php echo e(url("/blogsboardDelete/". $blog->id)); ?>" class="btn btn-danger btn-lg" style="color: white !important;" >
                                    <span class="glyphicon glyphicon-trash"></span> Delete
                                </a>
                            </th>
                        </table>
                        <?php else: ?>
                            <h2 style="color: white; letter-spacing: 8px;">NEW BLOG</h2>
                        <?php endif; ?>

                        <h5 style='border-bottom: 1px solid #d1cccc; margin-top:2%;'></h5>
                    </div>




























                    <div id="blogdescription" style="max-height: 2000px;">
                        <div id="showBlog" style="margin-left: -2%;">
                            <?php if(isset($blog)): ?>
                                <br/>
                                <h1 id="newseditTitleHead" style="font-weight: bold;"> <?php echo e($blog->blogTitle); ?></h1>

                                <h5 id="titleline" style='border-bottom: 1px solid #d1cccc; margin-top:2%; margin-left: 11.7%; margin-right: 11.7%'></h5>

                                <div style="margin-bottom: 40px;">
                                    <div class="table-responsive">
                                        <table id="example" class="table"></table>
                                    </div>

                                    <p style="text-align: left; margin-left: 10%; font-size: small;"><span class="glyphicon glyphicon-user"></span> Panagiotis Koutrouzas <span class="glyphicon glyphicon-time" style="margin-left: 10px;"></span> <?php echo e(date('j M Y H:i', strtotime($blog->updated_at))); ?></p>
                                    <br/>
                                    <?php if($blog->imgUpload !== null): ?>
                                        <img class="newsimage" src="<?php echo e(asset('public/uploads/'.$blog->imgUpload)); ?>" name="descr_img" id="descr_img" style="max-height:80%; max-width: 80%;"/></img>
                                        <br/><br/><br/>
                                    <?php endif; ?>
                                    <div id="descr" value="<?php echo e($blog->description); ?>" style="text-align:justify; left: 200px; margin-left: 10%; margin-right: 10%; font-size: 17px; white-space: pre-wrap;">


                                        <script>showContent();</script>

                                        <br/>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>

                        <div id="editBlog" style="display: none;">
                            <?php if(!isset($blog)): ?>
                                <script>showEditBlog();</script>
                                <?php echo Form::open(array('url'=>'blogsboardCreate', 'files' => true)); ?>

                            <?php else: ?>
                                <?php echo Form::open(array('url'=>'blogsboardEdit/'.$blog->id, 'files' => true)); ?>

                            <?php endif; ?>
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
                            <script>setInterval(showBlogDetails, 250)</script>

                            <br/>
                                <br/>














                                <div id="editorhead" style="width: 80%; margin-left: 10%; margin-right: 10%; letter-spacing: 2px; text-align: left;">

                                        <label>Title: </label><input type="text" name="title" id="title" class="form-control">


                                <label for="form-file" style="padding-top: 10px;">Upload cover photo:</label>
                                        <input type="file" name="newsImg" id="form-file" class="form-control" style="margin-top: 5px; margin-bottom: 20px;"/>


                                </div>

                            <textarea id="tinymce" class="tinymce" >

                                            </textarea>

                                <button class="btn btn-primary" style="text-align: center; padding: 10px; margin-top: 28px; margin-bottom: 5%; width: 120px;" type="submit" value="Submit">Submit</button>
                            <?php echo Form::close(); ?>

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
