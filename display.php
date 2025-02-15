<?php
include 'connect.php';?>



<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>offers & package</title>
    
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="table.css">
    <link rel="stylesheet" href="madush.css">
    <link rel="stylesheet" href="photo.css">


  </head>
  <body>

  <header >
            
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

            <div class="background-with-shade">
                <div class="content">
                  <h1>OFFERS & PACKAGES</h1>
                         
     <div class="container">
     
      <table class="table">
  <thead>
    <tr>
      <th scope="col">Package ID</th>
      <th scope="col">Package Name</th>
      <th scope="col">Discription</th>
      <th scope="col">offers</th>
      <th scope="col">price</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>


  <?php
  $sql = "SELECT * FROM `packages`";
  $result=mysqli_query($con,$sql);
  if($result){
    while($row=mysqli_fetch_assoc($result)){
      $pid=$row['pid'];
      $pname=$row['pname'];
      $description=$row['description'];
      $offers=$row['offers'];
      $price=$row['price'];
      echo '<tr>
      <th scope="row">'.$pid.'</th>
      <td>'.$pname.'</td>
      <td>'.$description.'</td>
      <td>'.$offers.'</td>
      <td>'.$price.'</td>
      <td>
        <button class="btn btn-primary"><a href="updateoffers.php?updateid='.$pid.'"class="text-light">Update</a></button>
        <button class="btn btn-danger"><a href="deleteoffers.php?deleteid='.$pid.'"class="text-light">Delete</a></button>
      </td>

    </tr>';
      
    }
  }



  ?>
  
  </tbody>
</table>
<button class="btn btn-primary my-5">
        <a href="user.php"class="text-light">Add Packages</a> 
      </button>
    </div>
                  
                 
                  
                </div>
              </div>

            
    




    <footer class="footer">
    
    <div class="footer-title">
    <h1>CaptureEye</h1> 
    </div>
    
    
    <div class="footer-links">
        <div>
            <a href="about.php">About Us    </a>
            <a href="termscondition.php">Terms and conditions    </a>
            <a href="privacy.php">Privacy and policy  </a>
            
        </div>
       
    </div>
    
    
    <div class="footer-social">
        <h4>Follow us</h4>
        <div class="footer-social-icons">
            <a href="https://www.facebook.com"><img src="icon/facebook.jpeg" alt="facebook"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com"><img src="icon/inst.jpeg" alt="instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://www.whatsapp.com"><img src="icon/whatsapp.png" alt="whatsapp"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.twitter.com"><img src="icon/twitter.jpeg" alt="twitter"><i class="fab fa-twitter"></i></a>
        </div>
    </div>
</footer>
  </body>
</html>