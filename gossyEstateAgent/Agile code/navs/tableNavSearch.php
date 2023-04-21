<link rel="stylesheet" href="styles/styleNavSearch.css">

<?php

session_start();

if(!isset($_SESSION["username"])){
    header("location: index.php");
    exit;
}


echo "

    <div class='listTable'>

        <ul>
            <li class='Home'><a href='homePage.php'>Home</a></li>

            <li class='signedIn'>Signed in as: ".$_SESSION['username'];" </li>



        </ul>
    </div>

    "

?>