<?php

include("databaseConn.php");
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];
}

$sql = "SELECT * FROM Accounts WHERE username = '$username' AND password='$password' LIMIT 1";

$result = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($result);

if($rows > 0){
    $_SESSION["username"] = $username;
    header("location: homePage.php");
}
else{
    echo "<p>Error, unable to check credentials</p>";
}

?>