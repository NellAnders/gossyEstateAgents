<?php

include("databaseConn.php");

$housename = $_REQUEST['housename'];
$address = $_REQUEST['address'];
$monthlyprice = $_REQUEST['monthlyprice'];
$landlordid = $_REQUEST['landlordid'];
$availablefrom = $_REQUEST['availablefrom'];
$propertyId = $_GET['PropertyID'];

$sql = "UPDATE Properties
 SET HouseName='$housename', Address='$address', MonthlyPrice='$monthlyprice', LandlordID ='$landlordid', AvailableFrom='$availablefrom'
  WHERE PropertyID = $propertyId";


if(mysqli_query($conn, $sql)){
    header("Refresh:3;url=properties.php");
}

else{
    echo "regsgfhs:".$id;
    echo"Error: Hush! sorry $sql. "
    . mysqli_error($conn);
}

?>