<?php

include("databaseConn.php");

$landlordfirstname = $_REQUEST['landlordfirstname'];
$landlordsurname = $_REQUEST['landlordsurname'];
$Companyname = $_REQUEST['Companyname'];
$landlordcontactnumber = $_REQUEST['landlordcontactnumber'];
$landlordId = $_GET['LandlordID'];

$sql = "UPDATE Landlord
 SET LandlordFirstName='$landlordfirstname', LandlordSurname='$landlordsurname', CompanyName='$Companyname', LandlordContactNumber ='$landlordcontactnumber'
  WHERE LandlordID = $landlordId";


if(mysqli_query($conn, $sql)){
    header("Refresh:3;url=landlords.php");
}

else{

    echo"Error: Hush! sorry $sql. "
    . mysqli_error($conn);
}

?>