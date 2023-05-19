<!-- <?php

// check if the id has been set in the url, so that we can only show the post we want to

if (!isset($_GET['AccountID']) || !is_numeric($_GET['AccountID'])){


    //send the use back to posts if id isn't set
    //|| means or
    header('Location: homePage.php');
}
else{
    include('databaseConn.php');

    $id = $_GET['AccountID'];

    $sql = "DELETE FROM Accounts WHERE AccountID='$id' LIMIT 1";

    if(mysqli_query($conn, $sql)){
        header("Refresh:3;url=manageAccounts.php");
    }
    
    else{
        echo"Error: Hush! sorry $sql. "
        . mysqli_error($conn);
    }

}

?>