<?php

include("databaseConn.php");

$landlordfirstname = $_REQUEST['landlordfirstname'];
$landlordsurname = $_REQUEST['landlordsurname'];
$Companyname = $_REQUEST['Companyname'];
$landlordcontactnumber = $_REQUEST['landlordcontactnumber'];



$sql = "INSERT INTO Landlord VALUES (NULL, '$landlordfirstname', '$landlordsurname','$Companyname', '$landlordcontactnumber', '1')";

if(mysqli_query($conn, $sql)){
    header("Refresh:3;url=landlords.php");
}

else{
    echo"Error: Hush! sorry $sql. "
    . mysqli_error($conn);
}

?>