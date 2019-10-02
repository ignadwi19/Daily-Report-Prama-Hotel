<?php

include 'connect.php';
$username = $_POST["username"];
$password = $_POST["password"];

$login = mysqli_query($connect, "SELECT * form users where username= '$username' and password= '$password' ");
if($result>0) {
    $user - mysqli_fetch_array($login);
    session_start();
    $_SESSION['userID']=$user['userID'];

    header("location: home.php");
}
    else{header("location:faillogin.html");
}
?>