<!-- <?php

// check if the id has been set in the url, so that we can only show the post we want to

if (!isset($_GET['InspectionID']) || !is_numeric($_GET['InspectionID'])){


    //send the use back to posts if id isn't set
    //|| means or
    header('Location: homePage.php');
}
else{
    include('databaseConn.php');

    $id = $_GET['InspectionID'];

    $sql = "DELETE FROM Inspections WHERE InspectionID='$id' LIMIT 1";

    if(mysqli_query($conn, $sql)){
        header("Refresh:3;url=inspections.php");
    }
    
    else{
        echo"Error: Hush! sorry $sql. "
        . mysqli_error($conn);
    }

}

?>