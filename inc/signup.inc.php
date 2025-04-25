<?php 

if( isset($__POST["submit"]) ) {
    
    // Get Data
    $uid = $_POST["uid"];
    $uemail = $_POST["uemail"];
    $pwd = $_POST["pwd"];
    $pwdrepeat = $_POST["pwdrepeat"];

    // Instantiate Signup contrl class
    include "../classes/dbh.classes.php";
    include "../classes/signup-contr.classes.php";
    include "../classes/signup.classes.php";

    $signup = New SignupContr($uid, $uemail, $pwd, $pwdrepeat);

    // Running Error Handlers
    $signup->signupUser();

    // Going to back to front
    header("location: ../index.php?error=none");
}