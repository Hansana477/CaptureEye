<?php

require 'configsign.php';

$sql="SELECT FullName,Username,Role,number,address,date,email,password FROM userprofile";

 $result=$con->query($sql);

 if($result->num_rows>0)
 {
    while($row=$result->fetch_assoc())
    {
        echo "FullName=".$row["FullName"]."<br>Username=".$row["Username"]."<br>Role=".$row["Role"]."<br>Address=".$row["address"]."<br>Date of Birth=".$row["date"]."<br>Email=".$row["email"];
    }
 }
 else{
    echo "NO Results";
 }




$con->close();
?>