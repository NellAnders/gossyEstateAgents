<link rel="stylesheet" href="styles/styleNav.css">

<?php


session_start();

if(!isset($_SESSION["username"])){
    header("location: index.php");
    exit;
}


echo "

    <div class='listLeft'>
        <ul>

            <li><a href='accountCreation.php'>Account Creation</a></li>

            <li><a href='manageAccounts.php'>Manage Accounts</a></li>


        </ul>
    </div>


    <div class='listCentre'>
        <ul>


            <li class='signedInHome'>Signed in as: ".$_SESSION['username'];" </li>

            
        </ul>
    </div>
    "

?>