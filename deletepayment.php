<?php

require 'config.php';

$email =$_POST["email"];

$sql="DELETE FROM payment WHERE email='$email'";

if($con->query($sql))
{
    header("Location:payment.php");
}




?>