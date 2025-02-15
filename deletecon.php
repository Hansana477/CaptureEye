
<?php

if ( isset($_GET["id"])) {
    $id = $_GET["id"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "eventphotography";
    
    
    $connection = new mysqli($servername, $username, $password, $database);

    $sql = "DELETE FROM contactus WHERE id=$id";
    $connection->query($sql); 

}
header("Location:indexcon.php");
exit;

?>