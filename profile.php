<?php
session_start();  


if (!isset($_SESSION['username'])) {
    header("Location: login.php");  
    exit();
}

require 'configsign.php';  

$username = $_SESSION['username'];
$sql = "SELECT FullName, Username, Role, number, address, date, email FROM userprofile WHERE Username=?";
$stmt = $con->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

$user = $result->fetch_assoc();  

$stmt->close();
$con->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/profilestyle.css">
</head>
<body>
<div class="backimage">
    <header class="header">
        <nav class="navbar">
            <div class="navbar-title">
                <h1>CaptureEye</h1>
            </div>
            <ul class="nav-links">
                <li><a href="home.php">Home</a></li>
                <li><a href="index.php">Discover</a></li>
                <li><a href="display.php">Offers & Packages</a></li>
                <li><a href="feedback.php">Feedback</a></li>
                <li><a href="indexcon.php">Contact Info</a></li>
            </ul>
            <div class="nav-buttons">
                <div class="lo-user">Hello! <?php echo $user['FullName']; ?></div>
                <button class="logout-btn"><a href="logout.php" class="logout-button">Logout</a></button>

            </div>
        </nav>
    </header>
    
    <div class="profile-section">
        <div class="profile-photo">
            <img src="images/user.jpeg" alt="Profile pic">
        </div>
    </div>

    <div class="account-info-section">
        <h2>Account Information</h2>
        <div class="read">
            FullName: <?php echo $user['FullName']; ?><br>
            Username: <?php echo $user['Username']; ?><br>
            Role: <?php echo $user['Role']; ?><br>
            Address: <?php echo $user['address']; ?><br>
            Number:<?php echo $user['number'];?><br>
            Date of Birth: <?php echo $user['date']; ?><br>
            Email: <?php echo $user['email']; ?><br>
        </div>
    </div>
    <div class="butn">
        <button type="submit" class="pay"><a href="payment.php">Payment Details</a></button><br><br>
    </div>
    <div class="input-delete">
        <form method="post" action="deletesignup.php">
        <div class="del-btn">
        <button type="submit" class="delete">Delete</button>
        </div>
        </form>
    </div>
    

    <div class="cahange-acc-info">
        <form method="post" action="updateprofile.php">
        <h2>Change Account Information</h2>           
                <label>Fullname</label>
                <input type="text" name="fname">
                <label>Email</label>
                <input type="email" name="mail">
                <label>Phone Number</label>
                <input type="tel" name="number">
                <div class="submit-details">
                    <button type="submit" class="change-details">Change</button>
                </div>
            </form>
        </div>
        </div>
        <footer class="footer">
    
    <div class="footer-title">
    <h1>CaptureEye</h1> 
    </div>
    
    
    <div class="footer-links">
        <div>
            <a href="about.php">About Us</a>
            <a href="termscondition.php">Terms and conditions</a>
            <a href="privacy.php">Privacy and policy </a>
            
        </div>
       
    </div>
    
    
    <div class="footer-social">
        <h3>Follow us</h3>
        <div class="footer-social-icons">
            
                <a href="https://www.facebook.com"><img src="styles/icon/facebook.jpeg" alt="facebook"><i class="fab fa-facebook"></i></a>           
                <a href="https://www.instagram.com"><img src="styles/icon/inst.jpeg" alt="instagram"><i class="fab fa-instagram"></i></a>          
                <a href="https://www.whatsapp.com"><img src="styles/icon/whatsapp.png" alt="whatsapp"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.twitter.com"><img src="styles/icon/twitter.jpeg" alt="twitter"><i class="fab fa-twitter"></i></a>
              
        </div>
    </div>
</footer>
</body>
</html>
