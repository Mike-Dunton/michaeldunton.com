<?php
class page
{

    private $databaseHandler;
    private $pageTitle;

    public function __construct( $title ) {
        $this->databaseHandler = databaseHandler::getConnection();
        $this->databaseHandler->connection->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        $this->pageTitle = $title;
        $this->maybe_initialize_table();
    }

    public function track($information) {
        $referer = '';
        if(isset($information['HTTP_REFERER'])) {
            $referer = $information['HTTP_REFERER'];
        }
        $data = array(
            'referer' => $referer,
            'userAgent' => $information['HTTP_USER_AGENT'],
            'ip' => $information['REMOTE_ADDR']);

        $insert = $this->databaseHandler->connection->prepare( "INSERT INTO $this->pageTitle (referer, userAgent, ip)
                                       VALUES (:referer, :userAgent, :ip)" );
        $insert->execute( $data );
    }

    private function maybe_initialize_table() {
        if( isset( $this->pageTitle ) ){
            if($this->is_page_table_created() === false) {
                $this->create_page_table();
            }
        }

    }

    private function is_page_table_created() {
        $statement = $this->databaseHandler->connection->prepare( "SHOW TABLES LIKE ?" );
        $statement->bindParam( 1, $this->pageTitle, PDO::PARAM_STR );
        $statement->execute();
        $row_count = $statement->rowCount();
        return $row_count > 0;
    }

    private function create_page_table() {
        $statement = $this->databaseHandler->connection->prepare("CREATE TABLE $this->pageTitle (
            `id` int(6) NOT NULL auto_increment,
            `visitDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
            `referer` varchar(250) NOT NULL default '',
            `userAgent` varchar(250) NOT NULL default '',
            `ip` varchar(20) NOT NULL default '',
             PRIMARY KEY (`id`),
             INDEX (`visitDate`)) ENGINE=MyISAM DEFAULT CHARSET=latin1");
        $statement->execute();
    }

}
?>