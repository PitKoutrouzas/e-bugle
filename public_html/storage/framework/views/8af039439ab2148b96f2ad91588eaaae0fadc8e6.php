<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <!-- Tab's CSS File -->
    <link rel="stylesheet" href="/public/css/contactus.css">
    <!-- Tab Title -->
    <title>Contact Us</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCH73cr3PulUIJmxu_AvVfzx_ZLosJ8bqw&callback=initMap"></script>
</head>

<body>

<div class="container-fluid">
    <a target="_blank" href="index.html">
        <img src="/logoshort.png" alt="seiis logo" width="100" height="40" align="left" style="margin-top: 10px; margin-left: -10px;"/></a>
    <ul class="nav navbar-nav" style="color: #095dbc">
        <li><a href="<?php echo e($relpath); ?>/index.php">Home</a></li>
        <li><a href="<?php echo e(url('/blogsboard')); ?>">News</a></li>
        <li><a href="<?php echo e($relpath); ?>/projects.php">Projects</a></li>
        <li><a href="<?php echo e(url('/blog')); ?>">Team Members</a></li>

        <?php if($userLoggedArr["type"] > 0): ?>
        <li><a href="<?php echo e($relpath); ?>/calendar.php">Calendar</a></li>
        <?php endif; ?>

        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Research Areas
                <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo e($relpath); ?>/practisera.php?reschange=1">Software Engineering</a></li>
                <li><a href="<?php echo e($relpath); ?>/practisera.php?reschange=2">Intelligent Information Systems</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Publications
                <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo e($relpath); ?>/publications.php?pubchange=1">Journals</a></li>
                <li><a href="<?php echo e($relpath); ?>/publications.php?pubchange=2">Conferences</a></li>
                <li><a href="<?php echo e($relpath); ?>/publications.php?pubchange=3">Books</a></li>
                <li><a href="<?php echo e($relpath); ?>/publications.php?pubchange=4">Book Chapters</a></li>
                <li><a href="<?php echo e($relpath); ?>/publications.php?pubchange=5">Editorials</a></li>
            </ul>
        </li>
        <li class="active"><a href="<?php echo e(url('/contactus')); ?>">Contact Us </a></li>

        <?php if($userLoggedArr["type"] > 0): ?>
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">More
                <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="<?php echo e($relpath); ?>/notes.php">Notes</a></li>
                <li><a href="<?php echo e($relpath); ?>/reports.php">Reports</a></li>
                <li><a href="<?php echo e($relpath); ?>/profile.php">Profile</a></li>

                <?php if($userLoggedArr["type"] == 3): ?>
                <li><a class="usersactive" href="<?php echo e($relpath); ?>/users.php">Users</a></li>
                <?php endif; ?>

            </ul>
        </li>
        <?php endif; ?>
        <div class="flex" style="color: #2E76F3;">
            <?php echo e($userLoggedArr["person"]); ?>

        </div>
    </ul>
    <ul class="nav navbar-nav pull-right">
        <?php if($userLoggedArr["person"] == ""): ?>
        <li style=""><a type="button" class="btn btn-default navbar-btn pull-right" href="<?php echo e($relpath); ?>/signin.php">Sign In</a></li>
        <?php else: ?>
        <li style=""><a type="button" class="btn btn-default navbar-btn pull-right" href="<?php echo e($relpath); ?>/signout.php">Sign Out</a></li>
        <?php endif; ?>
        </li>
    </ul>
</div>
<div>
    <?php if($userLoggedArr["type"] == 3): ?>
    <form action="<?php echo e($relpath); ?>/contactusedit.php" method="POST" style="margin:0 auto; width: 400px;">
        Address: <textarea name="address" class="form-control" rows="3" style="resize: none;"><?php echo e($dbContactUs->address); ?></textarea> <br/>
        Telephone: <textarea name="telephone" class="form-control" style="resize: none;"><?php echo e($dbContactUs->telephone); ?></textarea> <br/>
        Email: <textarea name="email" class="form-control" style="resize: none;"><?php echo e($dbContactUs->email); ?></textarea> <br/>
        Fax: <textarea name="fax" class="form-control" style="resize: none;"><?php echo e($dbContactUs->fax); ?></textarea><br/>
        <br/>
        <input type="submit" value="Save" style="color: buttontext;">
    </form>
    <?php else: ?>
    <fieldset style="margin:0 auto; width: 400px;"><legend>Contact Us</legend>
        <p>Address: <?php echo e($dbContactUs->address); ?></p>
        <p>Telephone: <?php echo e($dbContactUs->telephone); ?></p>
        <p>Email: <?php echo e($dbContactUs->email); ?></p>
        <p>Fax: <?php echo e($dbContactUs->fax); ?></p></fieldset>
    <?php endif; ?>
</div>

<br/>
<div id="map" style="margin:0 auto; height: 60%; width: 100%;"></div>

<script>
    function initMap() {

        // Here the Lat and Lng of the SEIIS Lab can be changed

        var seiislab = {lat: 34.67512, lng: 33.04325};
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: seiislab
        });
        var marker = new google.maps.Marker({
            position: seiislab,
            map: map
        });
    }
</script>

</body>
</html>