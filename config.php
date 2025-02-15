<?php

$con=new mysqli("localhost","root","","eventphotography");

if($con->connect_error)
{
    die("Connection failed".$con->connect_error);

}

?>