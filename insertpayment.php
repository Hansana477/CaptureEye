<?php
require 'config.php';


$fullname = $_POST['fullname'];
$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zipcode = $_POST['zipcode'];
$cardname = $_POST['cardname'];
$cardnumber = $_POST['cardnumber'];
$exp_month = $_POST['exp_month'];
$exp_year = $_POST['exp_year'];


$stmt ="INSERT INTO payment VALUES('$fullname', '$email', '$address', '$city', '$state', '$zipcode', '$cardname', '$cardnumber', '$exp_month','$exp_year')";

if($con->query($stmt))
{
    echo "<script>alert('Payment processed successfully!'); window.location.href='view_payment.php';</script>";
}
?>