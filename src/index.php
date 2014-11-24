<?php
    include_once('db.php');
    include_once('visitTracker.php');

    $visitTracker = new VisitTracker();
    $visitTracker->track($_SERVER);
?>
<!DOCTYPE html>
<html lang="en">
    <?php include_once("head.html"); ?>
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
