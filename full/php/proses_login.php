<?php
    session_start();
    $username=$_POST["username"];
    $password=$_POST["password"];

    if($username=="' or '1'='1" AND $password=="' or '1'='1"){
        #code
        $_SESSION["username"]=$username;
        header("location:/admin");
    }else{
        header("location:login.php?login_error");
    }
?>