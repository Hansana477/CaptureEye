<?php

require 'config.php';

$email =$_POST["email"];
$ecard =$_POST["cardname"];
$enumb =$_POST["cardnumber"];
$emonth =$_POST["exp_month"];
$eyear =$_POST["exp_year"];

if(empty($email)||empty($ecard)||empty($enumb)||empty($emonth)||empty($eyear))
{
    echo "All Required";
}
else{
    $sql="UPDATE payment set nameoncard='$ecard',cardnumb='$enumb',emonth='$emonth',eyear='$eyear' WHERE email='$email'";

    if($con->query($sql))
    {
        header("Location:view_payment.php");
    }
    else{
        echo"Not Updated";
    }
}




?>
