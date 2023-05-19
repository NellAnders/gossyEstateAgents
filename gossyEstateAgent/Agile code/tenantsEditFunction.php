<?php

include("databaseConn.php");

$tenantfirstname = $_REQUEST['tenantfirstname'];
$tenantsurname = $_REQUEST['tenantsurname'];
$currentaddress = $_REQUEST['currentaddress'];
$tenantcontactnumber = $_REQUEST['tenantcontactnumber'];
$propertyid = $_REQUEST['propertyid'];
$tenantId = $_GET['TenantID'];

$sql = "UPDATE Tenants
 SET TenantFirstName='$tenantfirstname', TenantSurname='$tenantsurname', CurrentAddress='$currentaddress', TenantContactNumber ='$tenantcontactnumber', PropertyID ='$propertyid'
  WHERE TenantID = $tenantId";


if(mysqli_query($conn, $sql)){
    header("Refresh:3;url=tenants.php");
}

else{

    echo"Error: Hush! sorry $sql. "
    . mysqli_error($conn);
}

?>