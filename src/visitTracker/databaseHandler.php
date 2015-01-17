<?php

$databaseConfigs = include("databaseConfig.php");

class databaseHandler {
    private static $instance;
    public $connection;

    private function __construct() {
        $host = $databaseConfigs['databaseHost'];
        $user = $databaseConfigs['databaseUser'];
        $password = $databaseConfigs['databasePassword'];
        try {
            $this->$connection = new PDO('mysql:host=$host;dbname=visitors', '$databaseUser' ,'$databasePassword', array(PDO::ATTR_PERSISTENT => true));

        } catch(PDOEception $error){
            echo $error->getMessage();
        }
    }

    public static function getConnection() {
        if ( self::$instance === null )
        {
            self::$instance = new dbHandler();
        }
        return self::$_instance;
    }



}
?>
