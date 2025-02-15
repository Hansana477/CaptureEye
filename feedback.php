<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Page</title>
    <link rel="stylesheet" href="styles/feedback.css">
    <link rel="stylesheet" href="style.css">

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

    <div class="feedback">
    <div class="feedback-form">
        <h2>Submit Your Feedback</h2>
        <form action="submit_feedback.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="feedback">Feedback:</label>
            <textarea id="feedback" name="feedback" rows="5" required></textarea>

            <button type="submit">Submit</button>

        </form>

        <form class="read-feedback">

        </form>
    </div>
    
    <div class="rea">
    <?php 
require 'config.php';


$sql="SELECT Name,Email,Feedback from feedback";
$result=$con->query($sql);

    if($result->num_rows)
    {
      while($row=$result->fetch_assoc())
      {
          echo "Name : ".$row["Name"]."<br>Email : ".$row["Email"]."<br>Feedback : ".$row["Feedback"]."<br>";
      }
    }


    $con->close();
?>
<div class="up-de">
<button class="up" type="submit"><a href="updatefeedback.php">Update</a></button>
<button class="del" type="submit"><a href="deletefeedback.php">Delete</a></Button>
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
            
                <a href="https://www.facebook.com"><img src="img/facebook.jpg" alt="facebook"><i class="fab fa-facebook"></i></a>           
                <a href="https://www.instagram.com"><img src="img/inst.jpg" alt="instagram"><i class="fab fa-instagram"></i></a>          
                <a href="https://www.whatsapp.com"><img src="img/whatsapp.jpg" alt="whatsapp"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.twitter.com"><img src="img/twitter.jpg" alt="twitter"><i class="fab fa-twitter"></i></a>
              
            </div>
        </div>
    </footer>
</body>
</html>
