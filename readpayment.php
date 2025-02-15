<?php
require 'config.php';

$sql="SELECT Fullname,email,address,city,state,zipcode,nameoncard,cardnumb,emonth,eyear FROM payment";

$result=$con->query($sql);

if($result->num_rows>0)
{
    
    while($row=$result->fetch_assoc())
    {
        echo $row["Fullname"]."<br> ".$row["email"]." <br>".$row["address"]." <br>".$row["city"]." <br>".$row["state"]." <br>".$row["zipcode"]."<br> ".$row["nameoncard"]." ".$row["cardnumb"]." ".$row["emonth"]." ".$row["eyear"]."<br>";
    }
       
}
else
{
    echo "No Results";
}


$con->close();
?>
