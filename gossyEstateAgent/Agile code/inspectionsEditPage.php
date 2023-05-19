<?php
session_start();
$accessLevel = $_SESSION['accessLevel'];

if($accessLevel == "Full" or $accessLevel == "Medium"){ 
}
else{
  header("location: homePage.php");

}

?>
<?php $inspectionId = $_GET['InspectionID'];?>
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
        <form action="./inspectionsEditFunction.php?InspectionID=<?php echo $inspectionId?>" method="post" name="edit">

            <div class="company">
              <p>Company</p>
              <input type="text" name="company" placeholder="Enter Company..." required /><br>
            </div>

            <div class="date">
              <p>Date</p>
              <input type="text" name="date" placeholder="Enter Date..." required /><br>
            </div>

            <div class="servicedescription">
              <p>Service Description</p>
              <input type="text" name="servicedescription" placeholder="Enter Service Description..." required /><br>
            </div>

            <div class="frequency">
              <p>Frequency</p>
              <input type="text" name="frequency" placeholder="Enter Frequency..." required /><br>
            </div>

            <div class="propertyid">
              <p>Property ID</p>
              <input type="text" name="propertyid" placeholder="Enter Property ID..." required /><br>
            </div>

            <input name="submit" type="submit" value="Edit" />
        </form>
      </div>
    </div>


</body>
</html>