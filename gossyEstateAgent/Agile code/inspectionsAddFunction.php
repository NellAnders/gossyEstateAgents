<?php

include("databaseConn.php");

$company = $_REQUEST['company'];
$date = $_REQUEST['date'];
$servicedescription = $_REQUEST['servicedescription'];
$frequency = $_REQUEST['frequency'];
$propertyid = $_REQUEST['propertyid'];




$sql = "INSERT INTO Inspections VALUES (NULL, '$company', '$date','$servicedescription', '$frequency',$propertyid)";

if(mysqli_query($conn, $sql)){
    header("Refresh:3;url=inspections.php");
}

else{
    echo"Error: Hush! sorry $sql. "
    . mysqli_error($conn);
}

?>