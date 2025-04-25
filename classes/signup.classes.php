<?php

class Signup extends Dbh { 

    protected function setUser( $uid, $pwd, $uemail ) {
        $stmt = $this->connect()->prepare(' INSERT INTO users (users_id, users_pwd, users_email) VALUES (?, ?, ?, ?);');

        $hashedPwd = password_hash( $pwd, PASSWORD_DEFAULT); 

        if ( !$stmt->execute(array( $uid, $hashedPwd, $uemail )) ) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }
    protected function checkUser( $uid, $uemail ) {
        $stmt = $this->connect()->prepare(' SELECT user_uid FROM users WHERE  users_uid = ? OR users_email = ?; ');

        if ( !$stmt->execute(array( $uid, $uemail )) ) {
            $stmt = null;
            header("location: ../index.php?error=stmtfailed");
            exit();
        }

        $resultCheck;
        if ( $stmt->rowCount() > 0 ) { 
            $resultCheck = false;
        } else { 
            $resultCheck = true;
        }
        return $resultCheck;

    }

}