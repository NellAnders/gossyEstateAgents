<!-- <?php

// check if the id has been set in the url, so that we can only show the post we want to

if (!isset($_GET['LandlordID']) || !is_numeric($_GET['LandlordID'])){


    //send the use back to posts if id isn't set
    //|| means or
    header('Location: homePage.php');
}
else{
    include('databaseConn.php');

    $id = $_GET['LandlordID'];

    $sql = "UPDATE Landlord SET Active = 0 WHERE LandlordID='$id' LIMIT 1";

    if(mysqli_query($conn, $sql)){
        header("Refresh:3;url=landlords.php");
    }
    
    else{
        echo"Error: Hush! sorry $sql. "
        . mysqli_error($conn);
    }

}

?>