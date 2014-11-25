<?php
class VisitTracker
{

    /*
    *   Load the user obect by username//password
    */
    public function track( $information )
    {
        $dbh = dbHandler::getConnection();
        $referer = '';
        if(isset($information['HTTP_REFERER'])) {
            $referer = $information['HTTP_REFERER'];
        }
        $data = array(
            'referer' => $referer,
            'userAgent' => $information['HTTP_USER_AGENT'],
            'ip' => $information['REMOTE_ADDR']);

        $insert = $dbh->_dbh->prepare("INSERT INTO indexVisit (referer, userAgent, ip)
                                       VALUES (:referer, :userAgent, :ip)");
        $insert->execute($data);
    }

}
?>