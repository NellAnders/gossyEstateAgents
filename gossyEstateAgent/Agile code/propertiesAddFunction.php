<?php

include("databaseConn.php");

$housename = $_REQUEST['housename'];
$address = $_REQUEST['address'];
$monthlyprice = $_REQUEST['monthlyprice'];
$landlordid = $_REQUEST['landlordid'];
$availablefrom = $_REQUEST['availablefrom'];


$sql = "INSERT INTO Properties VALUES (NULL, '$housename', '$address','$monthlyprice', '$landlordid','$availablefrom', '1')";

if(mysqli_query($conn, $sql)){
    header("Refresh:3;url=properties.php");
}

else{
    echo"Error: Hush! sorry $sql. "
    . mysqli_error($conn);
}

?>