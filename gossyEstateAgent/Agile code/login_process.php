<?php

include("databaseConn.php");
session_start();

$username = $_POST['username'];
$password = $_POST['password'];



if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

}

$sql = "SELECT * FROM Accounts WHERE Username = '$username' AND password='$password' LIMIT 1";

$result = mysqli_query($conn, $sql);
$rows = mysqli_num_rows($result);
$getId = mysqli_fetch_assoc($result);

if($rows > 0){
    $_SESSION["username"] = $username;
    $_SESSION["accountId"] = $getId["AccountID"];
    $_SESSION["accessLevel"] = $getId["AccessLevel"];
    header("location: homePage.php");
}
else{
    header("location: index.php");
}

?>