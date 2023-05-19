<?php
session_start();
$accessLevel = $_SESSION['accessLevel'];

if($accessLevel == "Full" or $accessLevel == "Medium"){ 
}
else{
  header("location: homePage.php");

}

?>
<?php $propertyId = $_GET['PropertyID'];?>
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
            <p>Edit<p>
            <hr/>
        </div>
        <form action="./propertiesEditFunction.php?PropertyID=<?php echo $propertyId?>" method="post" name="edit">

            <div class="housename">
              <p>House Name</p>
              <input type="text" name="housename" placeholder="Enter house name..." required /><br>
            </div>

            <div class="address">
              <p>Address</p>
              <input type="text" name="address" placeholder="Enter address..." required /><br>
            </div>

            <div class="monthlyprice">
              <p>Monthly Price</p>
              <input type="text" name="monthlyprice" placeholder="Enter Monthly Price..." required /><br>
            </div>

            <div class="landlordid">
              <p>Landlord ID</p>
              <input type="text" name="landlordid" placeholder="Enter Landlord ID..." required /><br>
            </div>

            <div class="availablefrom">
              <p>Available From</p>
              <input type="text" name="availablefrom" placeholder="Enter Available From..." required /><br>
            </div>

            <div class="Category">
              <p>Category</p>
              <input type="text" name="Category" placeholder="Enter Category..." required /><br>
            </div>

            <div class="whenOccupied">
              <p>When Occupied</p>
              <input type="text" name="whenOccupied" placeholder="Enter when occupied..." required /><br>
            </div>

            <div class="noOfTenants">
              <p>No. of Tenants</p>
              <input type="text" name="noOfTenants" placeholder="Enter No. of Tenants..." required /><br>
            </div>

            <input name="submit" type="submit" value="Edit" />
        </form>
      </div>
    </div>


</body>
</html>