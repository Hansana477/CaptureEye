<?php 
require 'config.php';


$sql="SELECT Name,Email,Feedback from feedback";
$result=$con->query($sql);

    if($result->num_rows)
    {
      while($row=$result->fetch_assoc())
      {
          echo "Name : ".$row["Name"]."<br>Email : ".$row["Email"]."<br>Feedback : ".$row["Feedback"];
      }
    }


    $con->close();
?>