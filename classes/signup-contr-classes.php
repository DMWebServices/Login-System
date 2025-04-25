<?php

class SignupContr {
    
    private $uid;

    private $uemail;
    private $pwd;
    private $pwdRepeat; 
        
    public function __construct($uid, $uemail, $pwd, $pwdrepeat) {
        $this->uid = $uid;
        $this->uemail = $uemail;
        $this->pwd = $pwd;
        $this->pwdrepeat = $pwdRepeat;        
    }


    public function signupUser() {
        if( $this->emptyInput() == false ) {
            header("location: ../index.php?error=emptyinput");
            exit();
        }
        if( $this->invalidUid() == false ) {
            header("location: ../index.php?error=username");
            exit();
        }
        if( $this->invaliduemail() == false ) {
            header("location: ../index.php?error=email");
            exit();
        }
        if( $this->pwdMatch() == false ) {
            header("location: ../index.php?error=passwordmatch");
            exit();
        }
        if( $this->checkUsesrlogins() == false ) {
            header("location: ../index.php?error=useroremailtaken");
            exit();
        }

        $this->setUser($this->uid, $this->pwd, $this->uemail);
    }
    

    private function emptyInput() {
        $result;

        if(empty($this->uid) || empty($this->uemail) || empty($this->pwd) || empty($this->pwdreapeat)) {
            $result = false;
        } else {
            $result = true; 
        }
        return $result;
    }

    private function invalidUid() {
        $result;

        if ( !preg_match("/^a-zA-Z0-9]*$", $this->uid) ) {
         $result = false;
        } else {
            $result = true;
        }
        return $result;

    }
    
    private function invaliduemail() {
        $result;

        if ( !filter_var($this->uemail, FILTER_VALIDATE_EMAIL) ) {
         $result = false;
        } else {
            $result = true;
        }
        return $result;

    }

    private function pwdMatch() {
        $result;

        if ( $this->pwd !== $this->pwdrepeat ) {
         $result = false;
        } else {
            $result = true;
        }
        return $result;

    }

    private function checkUsesrlogins() {
        $result;

        if ( !$this->checkUser($this->uid, $this->uemail) ) {
         $result = false;
        } else {
            $result = true;
        }
        return $result;

    }


}