<?php

include("databaseConn.php");

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$accessLevel = $_REQUEST['accessLevel'];


$sql = "INSERT INTO Accounts VALUES (NULL, '$accessLevel', '$username','$password')";

if(mysqli_query($conn, $sql)){
    header("Refresh:3;url=accountCreation.php");
}

else{
    echo"Error: Hush! sorry $sql. "
    . mysqli_error($conn);
}

?>