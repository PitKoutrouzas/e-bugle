<!doctype html>
<!-- Na dimiourgisw form me collapsibles mesa kai na valw ena scroll mesa-->
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <style type="text/css">

        .hrclass{
            color: #A9E2F3;
        }

        a{
            color: #2E76F3;
            text-decoration: none;
        }

        body {
            font-family: Lato !important;
            margin:0;
            padding:0;
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

        th {
            background-color: #A42D2D;
            color: white;
        }

        thead { display: block; }
        tbody {
            height: 800px;
            overflow-y: auto;
            overflow-x: hidden;
        }
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

    <title>News</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
        <div style='margin-left: 200px !important; margin-right: 200px !important;'>
            <a style="float: left; font-family: 'Segoe UI',Arial,sans-serif; font-size: 20px;" href="News.php?newschange=0">News</a>

            <text id="titlebread" style="float: left; margin-left: 5px; font-family:'Segoe UI',Arial,sans-serif;"></text>
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
        <div style='margin-left: 200px !important; margin-right: 200px !important;'>
            <a style="float: left; font-family: 'Segoe UI',Arial,sans-serif; font-size: 20px;" href="News.php?newschange=0">News</a>

            <text id="titlebread" style="float: left; margin-left: 5px; font-family:'Segoe UI',Arial,sans-serif;"></text>
            <br/>
        </div>
        <div style="margin: 0 !important; display: inline-block;">
            <div style="width:600px;left:0px;"> </div>
            <image align="left" id="editnews" width="0" height="0" style="display:none;" onClick="editNew()"/>
            <image align="left" id="deletenews" width="0" height="0" style="display:none;" onClick="deleteNew()"/>

        </div>
        <?php endif; ?>

        <div class="table-responsive" style="width:500px; margin: auto;">
            <table class="table" border="0">
                <thead style='width:100%;'>
                <tr>
                    <?php if(!is_null($namesearch)): ?>
                    <form id="searchform" action="News.php?newschange=0" method="POST">
                        <fieldset id="searchfield">
                            <legend>Search by Title:</legend>
                            <input type="text" class="form-control" style="display: inline; width: 70%; margin-left: 60px;" name="namesearch" placeholder="<leave blank for full list>" style="border:2px solid #456879; border-radius:10px; height: 22px; width: 230px;"/>
                            <input class="form-control" type="image" src="iconsearch.png" style="width:40px; height: 36px; padding: 5px;"/>
                        </fieldset>
                    </form>
                    <?php else: ?>
                    <form id="searchform" action="News.php?newschange=0" method="POST">
                        <fieldset id="searchfield">
                            <legend>Search by Title:</legend>
                            <input type="text" class="form-control" style="display: inline; width: 70%; margin-left: 60px;" name="namesearch" placeholder="<leave blank for full list>" style="border:2px solid #456879; border-radius:10px; height: 22px; width: 230px;">
                            <input class="form-control" type="image" src="iconsearch.png" style="width:40px; height: 36px; padding: 5px;"/>
                        </fieldset>
                    </form>
                    <?php endif; ?>
                </tr>
                </thead>


            </table>
        </div>


        <!-- O PINAKAS -->

        <div id="newsfeed">
            <header style="font-family: 'Segoe UI',Arial,sans-serif;">
                <section class="features" style="padding-top: 0 !important;">
                    <br/>
                    <h2 style="text-align: center; color: #767575;">News</h2>
                    <h5 style='border-bottom: 1px solid #d1cccc; margin-top:4%;'></h5>
                    <br/>
                    <div style="max-height: 900px;overflow:auto;">
                        <div class="wrapper" >
                            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="feature" style="width: 100%; align-content: center;">
                                <div class="ficon" style="position: relative; text-align: center; color: white; margin-right: 0;">
                                    <img src="img/iconBlank.png" alt=""/>

                                </div>

                                <div class="details_exp" style="text-align: left; cursor: pointer" onClick="showDescription('<?php echo e($blog); ?>')">
                                    <h3><?php echo e($blog->formatted_newsTitle); ?></h3>
                                    <p><?php echo e($blog->formatted_description); ?></p>
                                    <a href="<?php echo e($blog->id); ?>" class="newstable" id="<?php echo e($blog->id); ?>" onClick="showDescription('<?php echo e($blog); ?>')">more details<span>→</span></a>
                                </div>

                            </div>
                            <br/>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </section>
            </header>
        </div>

        <!-- TELOS PINAKA -->

        <br/>

        <form  action="addAnews.php" method="post" id="newsadd" class="feature" enctype="multipart/form-data">
            <fieldset><legend><h3>Create News</h3></legend>
                <div style="margin-left: 300px;margin-right: 300px;text-align: left;">
                    Title: <input class="form-control" type="text" name="newsTitle" required/>
                    <br/>
                    Description:
                    <br/>
                    <textarea class="form-control" name="newsDescr" rows="5"  cols="99" style="resize: none;"></textarea>
                    <br/>
                    Upload Image: <input class="form-control" type="file" name="newsFile" accept="image/*"/>
                    <br/>
                    <br/>
                    <button class="btn btn-primary" type="submit" value="Submit">Submit</button>
                    <a class="btn btn-basic" type="button" href="News.php?newschange=0">Cancel</a>
                </div>
            </fieldset>
        </form>

        <form action="editAnews.php" method="post" id="newsedit" class="feature" enctype="multipart/form-data">
            <fieldset><legend><h3>Edit News</h3></legend>
                <div style="margin-left: 300px;margin-right: 300px;text-align: left;">
                    <textarea type="text" class="form-control" name="newseditID" id="newseditID" style="display:none" /></textarea>
                    Title: <textarea type="text" required class="form-control" name="newseditTitle" id="newseditTitle" style="resize : none;"></textarea>
                    <br/>
                    Description:
                    <br/>
                    <textarea name="newseditDescr" class="form-control" id="newseditDescr" rows="20" cols="100"></textarea>
                    <br/>

                    Upload Image: <div class="form-control" style="display: flex;">
                        <input type="file" style="width:107px;height:28px;padding:0;padding-bottom: 0;" name="newseditFile" id="newseditFiles" accept="image/*"/>
                        <text id="uploadedfile"> </text>
                    </div>
                    <br/>
                    <br/>
                    <button class="btn btn-primary" type="submit" value="Submit">Submit</button>
                    <a class="btn btn-basic" type="button" href="News.php?newschange=0">Cancel</a>
                </div>
            </fieldset>
        </form>

        <form action="deleteAnews.php" method="post" id="newsdelete" class="feature">
            <fieldset><legend><h3>Delete News</h3></legend>
                <textarea type="text" name="newsdeleteID" id="newsdeleteID" style="display:none"/></textarea>
                Continue with deleting selected news? <button class="btn btn-primary" style="padding-right:20px;padding-left:20px;" type="submit" value="Submit">Ok</button>
                <a class="btn btn-basic" type="button" href="News.php?newschange=0">Cancel</a>
            </fieldset>
        </form>


        <!--The description and image of every news that are dynamically changed through the functions-->

        <div id="newsshow" class="feature">

            <div>
                <h3 id="newseditTitleHead" style="font-weight: bold;"></h3>
            </div>

            <div style="border:1px solid #f7f7f7;background-color:#f7f7f7;margin: 40px;">
                <div class="table-responsive">
                    <table id="example" class="table"></table>
                </div>

                <img class="newsimage"
                     src="" name="descr_img" id="descr_img" style="min-width: 98px; min-height: 400px; display: none; max-width:980px; max-height:400px;"/></img>
                <br/><br/>
                <div id="descr" style="text-align:justify; left: 200px; margin-left: 10%; margin-right: 10%; font-size: 17px; white-space: pre-wrap;">

                    <br/>
                </div>
            </div>
        </div>

        <script>
            function addNew()
            {
                document.getElementById("newsfeed").style.display = 'none';
                document.getElementById("newsshow").style.display = 'none';
                document.getElementById("newsadd").style.display = 'inline';
                document.getElementById("newsedit").style.display = 'none';
                document.getElementById("editnews").style.display = 'none';
                document.getElementById("searchfield").style.display = 'none';
                document.getElementById("deletenews").style.display = 'none';
                document.getElementById("addnews").style.display = 'none';
                document.getElementById("titlebread").innerHTML = "» Create News"
                //document.getElementById("newstable").style.display = 'none';
                document.getElementById("newsdelete").style.display = 'none';
                document.getElementById('descr').innerHTML = '';
                document.getElementById("descr_img").style.display = 'none';
                document.getElementById("descr_img").src = "";
                document.getElementById("buttons").style.paddingRight = "0%";
            }
        </script>
        <script>
            function editNew()
            {
                document.getElementById("addnews").style.display = 'none';
                document.getElementById("titlebread").innerHTML += " » Edit"
                document.getElementById("newsadd").style.display = 'none';
                document.getElementById("editnews").style.display = 'none';
                document.getElementById("searchfield").style.display = 'none';
                document.getElementById("deletenews").style.display = 'none';
                document.getElementById("newsdelete").style.display = 'none';
                //document.getElementById("newstable").style.display = 'none';
                document.getElementById("newsshow").style.display = 'none';
                document.getElementById("newsedit").style.display = 'inline';
                document.getElementById('descr').innerHTML = '';
                document.getElementById("descr_img").style.display = 'none';
                document.getElementById("descr_img").src = "";
                document.getElementById("backbutton").style.display = 'none';
                document.getElementById("buttons").style.paddingRight = "0%";
            }
        </script>
        <script>
            function deleteNew()
            {
                document.getElementById("addnews").style.display = 'none';
                document.getElementById("newsadd").style.display = 'none';
                document.getElementById("searchfield").style.display = 'none';
                document.getElementById("newsedit").style.display = 'none';
                document.getElementById("editnews").style.display = 'none';
                document.getElementById("newsshow").style.display = 'none';
                //document.getElementById("newstable").style.display = 'none';
                document.getElementById("deletenews").style.display = 'none';
                document.getElementById("newsdelete").style.display = 'inline';
                document.getElementById('descr').innerHTML = '';
                document.getElementById("descr_img").style.display = 'hidden';
                document.getElementById("descr_img").src = "";
                document.getElementById("backbutton").style.display = 'none';
                document.getElementById("buttons").style.paddingRight = "0%";
            }
        </script>
        <script>
            function showDescription(blog)
            {

                var blogObj = JSON.parse(blog);

                document.getElementById("newsadd").style.display = 'none';
                document.getElementById("searchfield").style.display = 'none';
                document.getElementById("newsedit").style.display = 'none';
                document.getElementById("titlebread").innerHTML = "»" + " " + blogObj.newsTitle;
                //  document.getElementById("newstable").style.display = 'none';
                document.getElementById("newsdelete").style.display = 'none';
                document.getElementById("newsfeed").style.display = 'none';
                document.getElementById("editnews").style.display = 'inline';
                document.getElementById("newsshow").style.display = 'inline';
                document.getElementById("deletenews").style.display = 'inline';
                document.getElementById("uploadedfile").innerHTML = "(Currently stored: " + blogObj.newsUpload + ")";
                document.getElementById("newseditDescr").innerHTML = blogObj.description;
                document.getElementById("newseditFiles").innerHTML = blogObj.newsUpload;
                document.getElementById("newseditID").innerHTML = blogObj.id;
                document.getElementById("newseditTitle").innerHTML = blogObj.newsTitle;
                document.getElementById("newseditTitleHead").innerHTML = blogObj.newsTitle;
                document.getElementById("newsdeleteID").innerHTML = blogObj.id;
                document.getElementById('descr').innerHTML = blogObj.description;
                document.getElementById("descr_img").style.display = 'inline';
                document.getElementById("descr_img").src = blogObj.newsUpload;
                document.getElementById("backbutton").style.display = 'none';
                document.getElementById("buttons").style.paddingRight = "3%";

                if (image === "")
                {
                    document.getElementById("descr_img").style.display = 'none';
                }
            }
        </script>

    </newscolumn>
</div>

<div style="margin-top:700px;">

</div>
</body>

</html>
