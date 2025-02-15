<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/paymentstyle.css">
    <script src="js/paymentvalidation.js" defer></script> 
    <title>Payment Form</title>
</head>
<body>

<?php 
require 'config.php';
?>

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
        <a href="login.php"><button class="login-btn">Log in</button></a>
        <a href="signup.php"><button class="signup-btn">Sign up</button></a>
        </div>
    </nav>
</header>
    
<div class="container">
    <form method="POST" action="insertpayment.php" onsubmit="return validatePaymentForm()"> 
        <h2>Add Payment</h2>
        <div class="row">
            <div class="column">
                
                <label for="fullname">Full Name:</label><br>
                <input type="text" id="fullname" name="fullname"><br><br>

                <label for="email">Email:</label><br>
                <input type="email" id="email" name="email"><br><br>

                <label for="address">Address:</label><br>
                <input type="text" id="address" name="address"><br><br>

                <label for="city">City:</label><br>
                <input type="text" id="city" name="city"><br><br>

                <label for="state">State:</label><br>
                <input type="text" id="state" name="state"><br><br>

                <label for="zipcode">Zipcode:</label><br>
                <input type="text" id="zipcode" name="zipcode"><br><br>
            </div>
            <div class="column">
                
                <div class="row">
                    <div class="column">
                        <label for="cardname">Name on Card:</label><br>
                        <input type="text" id="cardname" name="cardname"><br><br>
                    
                        <label for="cardnumber">Credit Card Number:</label><br>
                        <input type="text" id="cardnumber" name="cardnumber"><br><br>

                        <label for="exp_month">Expire Month:</label><br>
                        <input type="text" id="exp_month" name="exp_month"><br><br>

                        <label for="exp_year">Expire Year:</label><br>
                        <input type="text" id="exp_year" name="exp_year"><br><br>
                    </div>
                </div>
            </div>
        </div>
        <input type="submit" name="submit" value="Submit">
        <p id="error-message" class="error-message"></p>
    </form>
</div>

<footer class="footer">
    <div class="footer-title">
        <h1>CaptureEye</h1>
    </div>
    
    <div class="footer-links">
        <div>
            <a href="about.php">About Us</a>
            <a href="termscondition.php">Terms and conditions</a>
            <a href="privacy.php">Privacy and policy</a>
            
        </div>
    </div>
    
    <div class="footer-social">
        <h3>Follow us</h3>
        <div class="footer-social-icons">
            <a href="https://www.facebook.com"><img src="style/icon/facebook.jpg" alt="facebook"></a>           
            <a href="https://www.instagram.com"><img src="style/icon/inst.jpg" alt="instagram"></a>          
            <a href="https://www.whatsapp.com"><img src="style/icon/whatsapp.jpg" alt="whatsapp"></a>
            <a href="https://www.twitter.com"><img src="style/icon/twitter.jpg" alt="twitter"></a>
        </div>
    </div>
</footer>

</body>
</html>
