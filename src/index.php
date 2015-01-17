<?php
    include_once('visitTracker/visitTracker.php');

    $visitTracker = new Page("Home");
    $visitTracker->track($_SERVER);
?>
<!DOCTYPE html>
<html lang="en">
    <?php include_once("head.html"); ?>
    <body id="home">
    <?php include_once("tracking.html"); ?>
        <div class="container-fluid">
        <div class="header">
        ~/portfolio/index.php
        </div>
            <div class="height-maximizer">
                <div class="row">
                    <?php include_once("navigation.html"); ?>
                    <div class="col-xs-10 column-two">
                        <div id="content" itemscope itemtype="http://data-vocabulary.org/Person">
                            <h1>I am <span itemprop="name">Michael Dunton</span>.</h1>
                            <p><span itemprop="title">Software developer</span>, tech enthusiast, and nature lover living in Tallahassee, Florida.</p>
                            <p>This website's design is inspired by my favorite text editor, 
                            <a target="_blank" href="http://www.sublimetext.com/3">Sublime Text 3</a>.</p>
                            <p>I am a graduate of Florida State University where I earned my bachelor's degree in Computer Science. 
                            After graduation I started a full time position as a software developer at <a target="_blank" href="http://www.hostednumbers.com/"><span itemprop="affiliation">PATLive</span></a> where I have learned a 
                            tremendous amount of information.</p>
                            <p>I enjoy working on the server side. My top software development goals are
                            providing high availability and securing user data.  
                            Check out my <a target="_blank" itemprop="url" href="http://www.linkedin.com/in/michaeldunton/">linkedin</a> for an idea of what kind of technologies I have worked with.
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
