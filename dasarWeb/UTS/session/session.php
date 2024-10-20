<?php
session_start();

function isLogin(){
    return isset($_SESSION["user"]);
}

function logout(){
    session_destroy();
    header("location:../app/views/login.php");
    exit();
}
?>