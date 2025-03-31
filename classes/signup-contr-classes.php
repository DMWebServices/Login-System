<?php

Class SignupContr {
    
    private $uid;

    private $uemail;
    private $pwd;
    private $pwdrepeat; 
        
    public function __construct($uid, $uemail, $pwd, $pwdrepeat) {
        $this->$uid = $uid;
        $this->$uemail = $uemail;
        $this->$pwd = $pwd;
        $this->$pwdrepeat = $pwdrepeat;        
    }

    private function emptyInput() {
        $result;

        if(empty($this->$uid) || empty($this->$uemail) || empty($this->$pwd) || empty($this->$pwdreapeat)) {
            $result = false;
        } else {
            $result = true; 
        }
        return $result;
    }
}