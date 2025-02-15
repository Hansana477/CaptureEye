<?php

require 'configsign.php';

$fname=$_POST["name"];
$utype=$_POST["user-type"];
$number=$_POST["number"];
$address=$_POST["address"];
$birth=$_POST["birth"];
$mail=$_POST["email"];
$pw=$_POST["pw"];

$sql="INSERT INTO userprofile VALUES ('$fname','','$utype','$number','$address','$birth','$mail','$pw')";

if($con->query($sql)){
    require 'login.php';
}
else{
    echo "Error".$con->error;
}

$con->close();


?>