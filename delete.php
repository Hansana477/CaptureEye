<?php

require 'config.php';

$email =$_POST["email"];

$sql="DELETE FROM feedback WHERE email='$email'";

if($con->query($sql))
{
    echo"<script>
    alert('Feedback successfully deleted.')
    window.location.href='feedback.php';
    </script>";
}




?>