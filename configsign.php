<?php

$con=new mysqli("localhost","root","","eventphotography");

if($con->connect_error){
    die("Connection faild".$con->connect_error);
}

?>