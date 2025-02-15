<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update feedback</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles/feedback.css">
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

    <div class="back-image">
    <form class="update" method="post" action="update.php">
    <input type="text" id="email" name="email" placeholder="email"> 
    <input type="text" id="name" name="name" placeholder="Name">
    <input type="text" id="feedback" name="feedback" placeholder="Feedback">
    <button type="submit">Update</button>





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
            <a href="privacy.php">Privacy and policy </a>
            
        </div>
       
    </div>
    
    
    <div class="footer-social">
        <h3>Follow us</h3>
        <div class="footer-social-icons">
            
                <a href="https://www.facebook.com"><img src="img/facebook.jpg" alt="facebook"><i class="fab fa-facebook"></i></a>           
                <a href="https://www.instagram.com"><img src="img/inst.jpg" alt="instagram"><i class="fab fa-instagram"></i></a>          
                <a href="https://www.whatsapp.com"><img src="img/whatsapp.jpg" alt="whatsapp"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.twitter.com"><img src="img/twitter.jpg" alt="twitter"><i class="fab fa-twitter"></i></a>
              
            </div>
        </div>
    </footer>
</body>
</html>