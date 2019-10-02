<?php

session_start();

$description = $_POST['description'];
$location = $_POST['location'];
$kondisi = $_POST['kondisi'];
$tgl = date("Y-m-d");
include 'connect.php';
if(!$connect) {
    die("Connection failed: ").mysqli_connect_error());
}

$userID = $_SESSION['userID'];
$sql = "INSERT INTO report(reportID,tgl,description,location,kondisi,userID) VALUES 
(null,'$tgl','$description','$location','$kondisi','$userID')";
if(mysqli-query($conn,$sql)) {
    header("location:home.php");
}
else{
    echo "Error: ".$sql."<br>".mysqli_error($conn);
}

mysqli_close($conect);
?>