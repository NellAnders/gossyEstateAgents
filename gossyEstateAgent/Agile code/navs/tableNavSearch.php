<link rel="stylesheet" href="styles/styleNavSearch.css">

<?php

include("databaseConn.php");
session_start();

if(!isset($_SESSION["accountId"])){
    header("location: index.php");
    exit;
}

$id = $_SESSION['accountId'];

$sql = "SELECT Username FROM Accounts WHERE AccountID = $id ";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);


echo "

    <div class='listTable'>

        <ul>
            <li class='Home'><a href='homePage.php'>Home</a></li>

            <li class='signedIn'>Signed in as: ".$row["Username"];" </li>



        </ul>
    </div>

    "

?>