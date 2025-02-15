<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Payments</title>
    <link rel="stylesheet" href="style\style.css">
    <link rel="stylesheet" href="viewp.css">
    
    
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
    


    <div class="container">
        <h2 class="hepay">Payment Form</h2>
        
        <?php
require 'config.php';

$sql="SELECT Fullname,email,address,city,state,zipcode,nameoncard,cardnumb,emonth,eyear FROM payment";

$result=$con->query($sql);

if($result->num_rows>0)
{
    
    while($row=$result->fetch_assoc())
    {
        echo "<div class=view> Fullname : ".$row["Fullname"]."<br>email :  ".$row["email"]." <br>address : ".$row["address"]." <br>city : ".$row["city"]." <br>state : ".$row["state"]." <br>zipcode : ".$row["zipcode"]."<br>nameoncard :  ".$row["nameoncard"]."<br>cardnumb :  ".$row["cardnumb"]."<br>emonth :  ".$row["emonth"]."<br>eyear :  ".$row["eyear"]."</div>";
    }
       
}
else
{
    echo "No Results";
}


$con->close();
?>
</div>

<form class="updp"method="post" action="updatepayment.php">
<h2>Update Payment</h2>
<div class="row">
                    <div class="column">
                        <label for="email">Email:</label><br>
                        <input type="email" id="email" name="email"><br><br>

                        <label for="cardname">Name on Card:</label><br>
                        <input type="text" id="cardname" name="cardname"><br><br>
                    
                        <label for="cardnumber">Credit Card Number:</label><br>
                        <input type="text" id="cardnumber" name="cardnumber"><br><br>

                        <label for="exp_month">Expire Month:</label><br>
                        <input type="text" id="exp_month" name="exp_month"><br><br>

                        <label for="exp_year">Expire Year:</label><br>
                        <input type="text" id="exp_year" name="exp_year"><br><br>

                        <button type="submit">update</button>
                    </div>
                </div>

</form>
<form class="deltp" method="post" action="deletepayment.php">
     <input type="email" id="email" name="email"><br>
     <button type="Delete">delete</button>
   
</form>    


        
           
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
</body>

</html>


