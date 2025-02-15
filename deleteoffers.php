<?php
include 'connect.php';
if (isset($_GET['deleteid'])) {
    $pid = $_GET['deleteid'];

    
    $sql = "DELETE FROM `packages` WHERE pid=$pid";
    $result = mysqli_query($con, $sql);
    
    if ($result) {
       
       header('location:display.php');
    } else {
        die(mysqli_error($con));
    }
}
?>
