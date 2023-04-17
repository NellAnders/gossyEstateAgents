<link rel="stylesheet" href="styles/styleNav.css">

<?php

session_start();

if(!isset($_SESSION["username"])){
    header("location: index.php");
    exit;
}


echo "

    <div class='listTable'>

    <ul>
        <li class='HomeAccountCreation'><a href='homePage.php'>Home</a></li>

        <li class='signedInAccountCreation'>Signed in as: ".$_SESSION['username'];" </li>

        <li class='logOutAccountCreation'><a href='logout.php'>Log out</a></li>

    </ul>
    </div>

    "

?>
<?php  ?>