<?php

include("databaseConn.php");

$company = $_REQUEST['company'];
$date = $_REQUEST['date'];
$servicedescription = $_REQUEST['servicedescription'];
$frequency = $_REQUEST['frequency'];
$propertyid = $_REQUEST['propertyid'];
$inspectionId = $_GET['InspectionID'];

$sql = "UPDATE Inspections
 SET Company='$company', Date='$date', ServiceDescription='$servicedescription', Frequency ='$frequency', PropertyID ='$propertyid'
  WHERE InspectionID = $inspectionId";


if(mysqli_query($conn, $sql)){
    header("Refresh:3;url=inspections.php");
}

else{

    echo"Error: Hush! sorry $sql. "
    . mysqli_error($conn);
}

?>