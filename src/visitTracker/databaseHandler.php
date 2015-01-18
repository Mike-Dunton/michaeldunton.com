<?php

class databaseHandler {
    private static $instance;
    public $connection;

    private function __construct($databaseConfigs) {

        $host = $databaseConfigs['databaseHost'];
        $user = $databaseConfigs['databaseUser'];
        $password = $databaseConfigs['databasePassword'];

        try {
            $this->connection = new PDO("mysql:host=$host;dbname=visitTracker", $user , $password, array(PDO::ATTR_PERSISTENT => true));
        } catch(PDOEception $error){
            echo $error->getMessage();
        }
    }

    public static function getConnection() {
        if ( self::$instance === null )
        {
            $databaseConfigs = include 'databaseConfig.php';
            self::$instance = new databaseHandler($databaseConfigs);
        }
        return self::$instance;
    }



}
?>
