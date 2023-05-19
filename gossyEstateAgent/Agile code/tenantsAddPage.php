<?php
session_start();
$accessLevel = $_SESSION['accessLevel'];

if($accessLevel != "Full"){
  header("location: homePage.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Document</title>
</head>
<body>


    


    <div class="grid-container">

      <div class="grid-item item1">
        <?php
            include ("navs/accountCreationNav.php");
        ?>

        <!-- <h2>
        </h2> -->
      </div>
    

      <div class="grid-item propertiesItem2">

      <div class="title">
            <p>Add<p>
            <hr/>
        </div>
        <form action="./tenantsAddFunction.php" method="post" name="edit">

            <div class="tenantfirstname">
              <p>Tenant First Name</p>
              <input type="text" name="tenantfirstname" placeholder="Enter Tenant First Name..." required /><br>
            </div>

            <div class="tenantsurname">
              <p>Tenant Surname</p>
              <input type="text" name="tenantsurname" placeholder="Enter Tenant Surname..." required /><br>
            </div>

            <div class="currentaddress">
              <p>Current Address</p>
              <input type="text" name="currentaddress" placeholder="Enter Current Address..." required /><br>
            </div>

            <div class="tenantcontactnumber">
              <p>Tenant Contact Number</p>
              <input type="text" name="tenantcontactnumber" placeholder="Enter Tenant Contact Number..." required /><br>
            </div>

            <div class="propertyid">
              <p>Property ID</p>
              <input type="text" name="propertyid" placeholder="Enter Property ID..." required /><br>
            </div>

            <input name="submit" type="submit" value="Add" />
        </form>
      </div>
    </div>


</body>
</html>