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
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Source+Code+Pro'  type='text/css'>
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
            <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
            <link rel="stylesheet" href="css/style.css" type="text/css">
            <link rel="icon" href="/favicon.ico" type="image/x-icon">
            <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    </head>
    <body id="kazoo">
    <?php include_once("tracking.html"); ?>
        <div class="container-fluid">
        <div class="header">
        <p>~/portfolio/index.php</p>
        </div>
            <div class="height-maximizer">
                    <div class="row">
                    <?php include_once("navigation.html"); ?>
                        <div class="col-md-10 column-two">
                            <p><a href="http://2600hz.org/products.html">Kazoo</a> is a scalable, distributed, cloud-based telephony platform that allows you to build powerful telephony applications with a rich set of APIs.</p>
                            <p>My current job has me working intimently with the kazoo playform. You can view my public contributions <a href="https://github.com/2600hz/kazoo/commits?author=Mike-Dunton">here on github.</a>
                        </div>
                    </div>
            </div>
        </div>
    </body>
</html>
