<?php
session_start();  
require 'configsign.php';  


$email = $_POST['mail'];
$password = $_POST['password'];


$sql = "SELECT * FROM userprofile WHERE email=? AND password=?";
$stmt = $con->prepare($sql);
$stmt->bind_param("ss", $email, $password);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    
    $user = $result->fetch_assoc();
    $_SESSION['username'] = $user['Username'];  
    header("Location: profile.php");
} else {
    
    header("Location: login.php?error=wrong_credentials");
    exit();
}

$stmt->close();
$con->close();
?>
