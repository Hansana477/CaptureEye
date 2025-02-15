<?php 
include 'connect.php'; 
if(isset($_POST['submit'])) { 
  $name = $_POST['name']; 
  $event = $_POST['event']; 

  
  
  $sql = "INSERT INTO `crud_2` (name,event) VALUES ('$name', '$event')"; 
  
  $result = mysqli_query($con, $sql); 
  if($result) { 
   
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

    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">


    <title>crud 1234</title>
  </head>
  <body>
 

  
    <div class="container my-5">
    <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control" placeholder="select your name"name="name" autocomplete="off">
  </div>

  <div class="form-group">
    <label>Event</label>
    <input type="email" class="form-control" placeholder="select your event"name="event" autocomplete="off">
  </div>


    
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

  
  </div>




  </body>
</html>