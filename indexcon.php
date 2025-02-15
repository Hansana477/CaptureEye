<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contactus</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/styles.css">
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
    <h2>List of Inquiries</h2>
    <a class="btn btn-primary" href="createcon.php" role="button">New Inquiries</a>
    <br>
    <table class="table">
    <thead>
        <tr>
        
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Message</th>
            <th>Created At</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "eventphotography";

        
        $connection = new mysqli($servername, $username, $password, $database);

        
        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        
        $sql = "SELECT * FROM contactus";
        $result = $connection->query($sql);

        if (!$result) {
            die("Invalid query: " . $connection->error);
        }

        
        while($row = $result->fetch_assoc()) {
            echo "
            <tr>
                <td>$row[id]</td>
                <td>$row[name]</td>
                <td>$row[email]</td>
                <td>$row[phone]</td>
                <td>$row[message]</td>
                <td>$row[created_at]</td>
                <td>
                    <a class='btn btn-primary btn-sm' href='editcon.php?id=$row[id]'>Edit</a>
                    <a class='btn btn-danger btn-sm' href='deletecon.php?id=$row[id]'>Delete</a>
                </td>
            </tr>
            ";
            
        }

        ?>


</tbody>
    </table>
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
            background-image: url('https://imgcdn.stablediffusionweb.com/2024/4/11/23243fdb-9e17-4d3b-be42-c260115332c4.jpg'); /* Same background image */
            background-size: cover; 
            background-position: center; 
            background-repeat: no-repeat; 
            filter: blur(8px); 
            z-index: -1; 
        }

        h2 {
            color: #333;
            text-align: center;
            margin-bottom: 30px;
        }

        .container {
            background-color: rgba(208, 224, 227, 0.7); 
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .table {
            margin-top: 20px;
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);
        }

        .table thead {
            background-color: #007bff;
            color: #fff;
        }

        .table thead th {
            padding: 15px;
            text-align: center;
        }

        .table tbody td {
            padding: 15px;
            text-align: center;
            vertical-align: middle;
        }

        .table tbody tr {
            transition: background-color 0.3s;
        }

        .table tbody tr:hover {
            background-color: #f1f1f1;
        }

        .btn {
            margin: 5px;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
            transition: background-color 0.3s;
        }

        .btn-danger:hover {
            background-color: #c82333;
        }

        a {
            text-decoration: none;
            color: #fff;
        }

        a:hover {
            text-decoration: underline;
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