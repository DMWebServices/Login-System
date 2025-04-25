<?php 

class Dbh {
    protected function connect() {
        try {
            $username = "root";
            $password = "";
            $dbh = new PDO('mysqli:host=localhost;dbname=phplogin', $username, $password );
            return $dbh;
        } catch ( PDOException $e ) {
            print "Error: " . $e->getMessage() . "<br />";
            die();
        }
    }


}
