<?php

include("databaseConn.php");

$username = $_REQUEST['username'];
$password = $_REQUEST['password'];
$accessLevel = $_REQUEST['accessLevel'];
$id = $_GET['AccountID'];

$sql = "UPDATE Accounts SET AccessLevel='$accessLevel', Username='$username', Password='$password' WHERE AccountID = $id";


if(mysqli_query($conn, $sql)){
    header("Refresh:3;url=manageAccounts.php");
}

else{
    echo "regsgfhs:".$id;
    echo"Error: Hush! sorry $sql. "
    . mysqli_error($conn);
}

?>