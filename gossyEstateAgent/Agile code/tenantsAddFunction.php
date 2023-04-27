<?php

include("databaseConn.php");

$tenantfirstname = $_REQUEST['tenantfirstname'];
$tenantsurname = $_REQUEST['tenantsurname'];
$currentaddress = $_REQUEST['currentaddress'];
$tenantcontactnumber = $_REQUEST['tenantcontactnumber'];
$propertyid = $_REQUEST['propertyid'];


$sql = "INSERT INTO Tenants VALUES (NULL, '$tenantfirstname', '$tenantsurname','$currentaddress', '$tenantcontactnumber',$propertyid)";


if(mysqli_query($conn, $sql)){
    header("Refresh:3;url=tenants.php");
}

else{

    echo"Error: Hush! sorry $sql. "
    . mysqli_error($conn);
}

?>