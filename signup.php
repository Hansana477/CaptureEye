<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styles.css">
   
    <title>Sign Up</title>
</head>
<body>
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

<div class="background-container">
        <div class="signup-container">
            <div class="signup-box">
                <h1>Sign Up</h1>
                <form id="signup-form" method="post" action="insersign.php">
                    <div class="input-group">
                        <input type="text" name="name" id="full-name" placeholder="Full Name" required>                       
                    </div>                 
                    
                    <div class="radio-group">
                        <input type="radio" id="photographer" name="user-type" value="photographer">
                        <label for="photographer">Photographer</label>
                    
                        <input type="radio" id="client" name="user-type" value="client">
                        <label for="client">Client</label>
                    </div>
                    <div class="input-group">
                        <input type="tel" name="number" id="contact"  placeholder="Contact Number" required>
                        <input type="text" name="address" id="address" placeholder="Address" required>
                    </div>
                    <div class="input-group">
                        <label >Date of Birth</label>
                        <input type="date" name="birth" id="dob" placeholder="mm/dd/yyyy" required>
                    </div>
                    <div class="input-group">
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="input-group">
                    <input type="password" name="pw" id="password" placeholder="Password" required>
                    </div>
                    <div class="input-group">
                    <input type="password" name="conpassword" id="confirm-password" placeholder="Confirm password" required>
                    </div>
                    <button type="submit">Sign Up</button>
                    <div class="links">
                    <h4>Already Do you have an account? <a href="login.php" id="login">Login</a></h4>  
                    <a href="#" id="terms">Terms and Conditions</a>
                    </div>

                </form>
            </div>
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
            
                <a href="https://www.facebook.com"><img src="style/icon/facebook.jpg" alt="facebook"><i class="fab fa-facebook"></i></a>           
                <a href="https://www.instagram.com"><img src="style/icon/inst.jpg" alt="instagram"><i class="fab fa-instagram"></i></a>          
                <a href="https://www.whatsapp.com"><img src="style/icon/whatsapp.jpg" alt="whatsapp"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.twitter.com"><img src="style/icon/twitter.jpg" alt="twitter"><i class="fab fa-twitter"></i></a>
              
            </div>
        </div>
    </footer>
<script type="text/javascript" src="java/signup.js"></script>

</body>
</html>