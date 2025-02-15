<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles/styles.css">
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
    
    
    
    <div class="background-image">
        <div class="login-form-container">
            <div class="login-form">
                <h1>Login</h1>
                <form method="POST" action="readlogin.php"> 
                    <div class="input-container">
                        <input type="email" name="mail" placeholder="Email" required>
                        <input type="password" name="password" placeholder="Password" required>
                    </div>
                    <button type="submit">Login</button>
                    <a href="#" class="forgot-password">Forgot Password?</a>
                    <div class="additional-options">
                        Don't have an account? <a href="signup.php" class="sign-up">Sign Up</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('error') && urlParams.get('error') === 'wrong_credentials') {
            alert('Incorrect email or password. Please try again.');
        }
    </script>

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
