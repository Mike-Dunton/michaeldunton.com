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
    <body id="home">
    <?php include_once("tracking.html"); ?>
        <div class="container-fluid">
        <div class="header">
        <p>~/portfolio/index.php</p>
        </div>
            <div class="height-maximizer">
                    <div class="row">
                    <?php include_once("navigation.html"); ?>
                        <div class="col-md-10 column-two">
                            <p>Michael Dunton was here.</p>
                        </div>
                    </div>
            </div>
        </div>
    </body>
</html>
