<link rel="stylesheet" href="styles/styleNav.css">

<?php

include("databaseConn.php");


if(!isset($_SESSION["accountId"])){
    header("location: index.php");
    exit;
}

$id = $_SESSION['accountId'];

$sql = "SELECT Username FROM Accounts WHERE AccountID = $id ";
$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);


echo "

    <div class='listLeft'>
        <ul>



        </ul>
    </div>


    <div class='listCentre'>
        <ul>


            <li class='signedInHome'>Signed in as: ".$row["Username"];" </li>

            
        </ul>
    </div>
    "

?>