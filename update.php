<?php

require 'config.php';

$name =$_POST["name"];
$feedback =$_POST["feedback"];
$email =$_POST["email"];


if(empty($name)||empty($feedback))
{
    echo "All Required";
}
else{
    $sql="UPDATE feedback set Name='$name', Feedback='$feedback' WHERE email='$email'";

    if($con->query($sql))
    {
        echo"<script>
        alert('Feedback successfully updated.');
        window.location.href='feedback.php';
        </script>";
    }
    
}




?>