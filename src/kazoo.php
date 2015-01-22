<?php
    include_once('visitTracker/visitTracker.php');

    $visitTracker = new Page("Kazoo");
    $visitTracker->track($_SERVER);
?>
<!DOCTYPE html>
<html lang="en">
    <?php include_once("head.html"); ?>
    <body id="kazoo">
    <?php include_once("tracking.html"); ?>
        <div class="container-fluid">
        <div class="header">
        ~/portfolio/kazoo.php
        </div>
            <div class="height-maximizer">
                    <div class="row">
                    <?php include_once("navigation.html"); ?>
                        <div class="col-md-10 column-two">
                            <div id="content">
                                <h1>Kazoo</h1>
                                <p><a href="http://2600hz.org/products.html">Kazoo</a> is a scalable, distributed, cloud-based telephony platform that allows you to build powerful telephony applications with a rich set of APIs.</p>
                                <p>My current job has me working intimently with the kazoo playform. You can view my public contributions <a href="https://github.com/2600hz/kazoo/commits?author=Mike-Dunton">here on github.</a></p>
                                </div>
                        </div>
                    </div>
            </div>
            <?php include_once("footer.html"); ?>
        </div>
        <script src"https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </body>
</html>
