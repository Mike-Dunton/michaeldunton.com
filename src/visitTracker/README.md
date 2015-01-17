
## Set up
Create the database user and grant privileges to the user. 
```
CREATE USER 'dbUser'@'localhost' IDENTIFIED BY 'myPass';
GRANT ALL PRIVILEGES ON  indexVisits.* TO 'dbUser'@'localhost';
FLUSH PRIVILEGES;
```

## How to use
On any page you want to track visitors just add this snipit and replace the name of the page
```
<?php
    include_once('visitTracker/visitTracker.php');

    $visitTracker = new Page("Home");
    $visitTracker->track($_SERVER);
?>
```