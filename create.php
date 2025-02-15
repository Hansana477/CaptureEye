<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "eventphotography";


$connection = new mysqli($servername, $username, $password, $database);




$name = "";
$email = "";
$phone = "";
$message = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $message = $_POST["message"];

    do {
        if (empty($name) || empty($email) || empty($phone) || empty($message)) {
            $errorMessage = "All the fields are required";
            break;
        }

        
        $sql = "INSERT INTO contactus (name, email, phone, message) " .
               "VALUES ('$name', '$email', '$phone', '$message')";
        $result = $connection->query($sql);

        if (!$result) {
            $errorMessage = "Invalid query: " . $connection->error;
            break;
        }


        $name = "";
        $email = "";
        $phone = "";
        $message = "";

        $successMessage = "Inquire submit successfully";

        header("location: create.php");
        exit;



    } while (false);
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contactus</title>
   
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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


    <div class="container my-5">
        <h2>Contact Us</h2>


        <?php
        if ( !empty($errorMessage) ) {
            echo "
            <div class='alert alert-warning alert-dismissible fade show' role='alert'>
                <strong>$errorMessage</strong>
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>
            ";
        }
        ?>


        <form method="post">
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Name</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Email</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Phone</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="phone" value="<?php echo $phone; ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-3 col-form-label">Message</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="message" value="<?php echo $message; ?>">
                </div>
            </div>



            <?php
            if ( !empty($successMessage) ) {
                echo "
                <div class='row mb-3'>
                    <div class='offset-sm-3 col-sm-6'>
                        <div class='alert alert-success alert-dismissible fade show' role='alert'>
                            <strong>$successMessage</strong>
                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                        </div>
                    </div>
                </div>
                ";
            }
            ?>


            <div class="row mb-3">
                <div class="offset-sm-3 col-sm-3 d-grid">
                    <button type="submit" class="btn btn-primary">Submit</button>
                 </div>
                 <div class="col-sm-3 d-grid">
                     <a class="btn btn-outline-primary" href="/eventphotography/index.php" role="button">Cancel</a>
                </div>
            </div>

        </form>
    </div>

    

    <style>
       
        body {
            position: relative; 
            background-image: url('https://imgcdn.stablediffusionweb.com/2024/4/11/23243fdb-9e17-4d3b-be42-c260115332c4.jpg'); /* Original background image */
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            color: #333; 
            font-family: 'Arial', sans-serif; 
        }

        body::before {
            content: ""; 
            position: absolute; 
            top: 0; 
            left: 0; 
            right: 0; 
            bottom: 0; 
            background-image: url('https://imgcdn.stablediffusionweb.com/2024/4/11/23243fdb-9e17-4d3b-be42-c260115332c4.jpg'); 
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            filter: blur(8px); 
            z-index: -1; 
        }
        
        h2 {
            color: #495057;
            text-align: center;
            margin-bottom: 30px;
            font-weight: 700;
        }

        .container {
            max-width: 700px;
            background-color: rgba(208, 224, 227, 0.8); 
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 40px;
            border-radius: 10px;
        }

        .form-control {
            border: 2px solid #ced4da;
            border-radius: 5px;
            padding: 10px;
        }

        .form-control:focus {
            border-color: #0d6efd;
            box-shadow: none;
        }

        .btn-primary {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }

        .btn-primary:hover {
            background-color: #0b5ed7;
            border-color: #0b5ed7;
        }

        .btn-outline-primary {
            border-color: #0d6efd;
            color: #0d6efd;
        }

        .btn-outline-primary:hover {
            background-color: #0d6efd;
            color: #fff;
        }

        .alert {
            font-size: 14px;
            margin-top: 15px;
        }

        .alert-warning {
            background-color: #fff3cd;
            border-color: #ffeeba;
            color: #856404;
        }

        .alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }

        .btn-close {
            padding: 0.25rem 0.5rem;
        }

        .row.mb-3 {
            margin-bottom: 1.5rem;
        }

       
        @media (max-width: 576px) {
            .container {
                padding: 20px;
            }

            .col-form-label {
                text-align: left;
            }
        }

       
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: rgb(17, 17, 17);
            box-shadow: 0px 2px 10px rgba(240, 8, 8, 0.1);
        }
        
        .navbar-title  {
            color: #fbf9f9; 
            font-size: 25px;
        }
        
        .nav-links {
            list-style: none;
            display: flex;
            gap: 20px;
        }
        
        .nav-links a {
            text-decoration: none;
            color: #f9f9f9; 
            font-size: 18px;
            font-weight: 500;
        }
        
        .nav-links a:hover {
            color: #7355e9; 
            
            
            
        }
        
        .nav-buttons {
            display: flex;
            gap: 10px;
        }
        
        .nav-buttons button {
            padding: 10px 20px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }
        
        .nav-buttons .login-btn {
            background-color: #2b2b2b; 
            color: rgb(245, 242, 242);
        }
        
        .nav-buttons .signup-btn {
            background-color: white;
            color: #2b2b2b;
            border: 1px solid #2b2b2b; 
        }
        
        
        .nav-buttons button:hover {
            background-color: #007bff;
            color: white;
        }
        
        
        .footer {
            background-color: rgb(16, 16, 17); 
            padding: 40px 20px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }
        
        .footer .footer-title {
            display: flex;
            flex-direction: column;
            align-items: center;
            font-size: 19px;
        }
        
        
        
        .footer .footer-links {
            display: flex;
            gap: 50px; 
        }
        
        .footer .footer-links div {
            display: flex;
            flex-direction: row;
            
        }
        
        .footer .footer-links div h4 {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .footer .footer-links div a {
            color: white;
            text-decoration: none;
            margin-bottom: 5px;
            font-size: 14px;
            margin-left: 10px;
        }
        
        .footer .footer-links div a:hover {
            text-decoration: underline;
        }
        
        .footer .footer-social {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        
        .footer .footer-social h4 {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .footer .footer-social-icons {
            display: flex;
            gap: 10px; 
            
        }
        
        .footer .footer-social-icons a {
            color: white;
            font-size: 24px;
        }
        
        .footer .footer-social-icons a:hover {
            color: #f0c14b; 
        }
        .footer .footer-social-icons img {
            width: 30px;
            height:30px;

        }
    </style>

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
            <a href="https://www.facebook.com"><img src="styles/icon/facebook.jpeg" alt="facebook"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com"><img src="styles/icon/inst.jpeg" alt="instagram"><i class="fab fa-instagram"></i></a>
            <a href="https://www.whatsapp.com"><img src="styles/icon/whatsapp.png" alt="whatsapp"><i class="fab fa-whatsapp"></i></a>
            <a href="https://www.twitter.com"><img src="styles/icon/twitter.jpeg" alt="twitter"><i class="fab fa-twitter"></i></a>
        </div>
    </div>
</footer>

    
</body>
</html>