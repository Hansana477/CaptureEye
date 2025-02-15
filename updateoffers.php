<?php 
include 'connect.php'; 

$pid = $_GET['updateid'];

$sql = "SELECT * FROM `packages` WHERE pid=$pid";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

$pname = $row['pname'];
$description = $row['description'];
$offers = $row['offers'];
$price = $row['price'];

if (isset($_POST['submit'])) { 
  $pname = $_POST['pname']; 
  $description = $_POST['description']; 
  $offers = $_POST['offers']; 
  $price = $_POST['price']; 
  
  $sql = "UPDATE `packages` SET pname='$pname', description='$description', offers='$offers', price='$price' WHERE pid=$pid";
  
  $result = mysqli_query($con, $sql); 
  if ($result) { 
     
     header('location:display.php');
  } else { 
    die(mysqli_error($con)); 
  } 
} 
?>

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="update.css">
    


    <title>Update User</title>
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
                    <button class="login-btn">Log in</button>
                    <button class="signup-btn">Sign up</button>
                </div>
            </nav>
        
            </header>

            <div class="background-with-shade">
                <div class="content">
                  <h1>Welcome to My Website</h1>
                  <div class="container my-5">

          <form name="packageForm" method="post">
          <div class="form-group">
          <label>PACKAGE NAME</label>
          <input type="text" class="form-control" placeholder="Enter package name" name="pname" autocomplete="off" value="<?php echo $pname; ?>">
        </div>

        <div class="form-group">
          <label>DESCRIPTION</label>
          <input type="text" class="form-control" placeholder="Enter description" name="description" autocomplete="off" value="<?php echo $description; ?>">
        </div>

        <div class="form-group">
          <label>OFFERS</label>
          <input type="text" class="form-control" placeholder="Enter offers" name="offers" autocomplete="off" value="<?php echo $offers; ?>">
        </div>

        <div class="form-group">
          <label>PRICE</label>
          <input type="text" class="form-control" placeholder="Enter price" name="price" value="<?php echo $price; ?>">
        </div>
          
        <button type="submit" class="btn btn-primary" name="submit">Update</button>
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

