<?php
    include_once('db.php');
    include_once('visitTracker.php');

    $visitTracker = new VisitTracker();
    $visitTracker->track($_SERVER);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
            <title>michaeldunton.com</title>
            <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Source+Code+Pro'  type='text/css'>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="css/style.css" type="text/css">
            <link rel="icon" href="/favicon.ico" type="image/x-icon">
            <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    </head>
    <body>
        <div class="container-fluid">
        <div class="header">
        <p>~/portfolio/index.php</p>
        </div>
            <div class="height-maximizer">
                    <div class="row">
                        <div class="col-md-2 column-one">
                            <img class="center-block" src="http://www.gravatar.com/avatar/44c419ced8cb577d774287a9e5929223?s=286" />
                            <div class="sidebar-navigation-container">
                                <div class="nav-item-first-level">
                                    <i class="fa fa-github"></i>
                                    <a href="https://github.com/Mike-Dunton">FollowMeOn.github</a>
                                </div>
                                <div class="nav-item-first-level">
                                    <i class="fa fa-twitter-square"></i>
                                    <a href="https://twitter.com/Mike_Dunton">FollowMeOn.twitter</a>
                                </div>
                                <div class="nav-item-first-level">
                                    <i class="fa fa-folder-open-o"></i>
                                    <span>michaeldunton.com</span>
                                </div>
                                <div class="nav-item-second-level">
                                    <i class="fa fa-file-text-o"></i>
                                    <a href="#">readme.md</a>
                                </div>
                                <div class="nav-item-second-level">
                                    <i class="fa fa-github"></i>
                                    <a href="#">source</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-10 column-two">
                            <p>Michael Dunton was here.</p>
                        </div>
                    </div>
            </div>
        </div>
    </body>
</html>
