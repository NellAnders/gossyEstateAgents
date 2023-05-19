<?php
session_start();
$accessLevel = $_SESSION['accessLevel'];

if($accessLevel == "Full" or $accessLevel == "Medium"){ 
}
else{
  header("location: homePage.php");

}

?>
<?php $landlordId = $_GET['LandlordID'];?>
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
    

      <div class="grid-item landlordsItem2">

      <div class="title">
            <p>Edit<p>
            <hr/>
        </div>
        <form action="./landlordsEditFunction.php?LandlordID=<?php echo $landlordId?>" method="post" name="edit">

            <div class="landlordfirstname">
              <p>Landlord First Name</p>
              <input type="text" name="landlordfirstname" placeholder="Enter Landlord First Name..." required /><br>
            </div>

            <div class="landlordsurname">
              <p>Landlord Surname</p>
              <input type="text" name="landlordsurname" placeholder="Enter Landlord Surname..." required /><br>
            </div>

            <div class="companyname">
              <p>Company Name</p>
              <input type="text" name="Companyname" placeholder="Enter Company Name..." required /><br>
            </div>

            <div class="landlordcontactnumber">
              <p>Landlord Contact Number</p>
              <input type="text" name="landlordcontactnumber" placeholder="Enter Landlord Contact Number..." required /><br>
            </div>


            <input name="submit" type="submit" value="Edit" />
        </form>
      </div>
    </div>


</body>
</html>