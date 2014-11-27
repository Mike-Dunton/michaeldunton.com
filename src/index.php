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
                    <div class="col-xs-10 column-two">
                        <div id="content">
                            <h1>I am Michael Dunton.</h1>
                            <p>Software developer, tech enthusiast, and nature lover living in Tallahassee, Florida.</p>
                            <p>This website's design was inspired by my favorite text editor, <a target="_blank" href="http://www.sublimetext.com/3">Sublime Text 3</a>.</p>       
                            <p>My current project is powered by Kazoo, Erlang, Node, RabbitMQ, Puppet, Durandal, and Github. I enjoy working on the server side to ensure that customer data is reliable, persistent, and secure.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src"https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

    </body>
</html>
