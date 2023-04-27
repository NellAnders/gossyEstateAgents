

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="styles/styleManageAccounts.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    
</head >
    <body>
    
    
    
    <div class="container">

      <div class="griditem1">
        <h1></h1>

        <?php 
          include("navs/tableNav.php");
          ?>
          <li class='logOut'><a href='logout.php'>Log out</a></li>
          <?php
          include("databaseConn.php");
          // session_start();
          
          if(!isset($_SESSION["username"])){
              header("location: index.php");
          exit;
        }

        $id = $_SESSION['accountId'];
        ?>



      </div>

      <div class="grid-container-parent">

        <div class="grid-container">
            <div class="grid-item item1">
            <!-- <a href='homePage.php' class="addNew">Add New</a> -->

            <label class="title">Inspections</label>


            <!-- add -->

            <a class="button" href="./inspectionsAddPage.php">Add</a>


            <!-- search form -->
            <form class = "searchbar" name="search" action="<?php echo $_SERVER ['PHP_SELF']; ?>" method='post'>
                <input type="text" name="searchterm" id="searchterm" placeholder="Search"/>
                <input type="submit" name="submit" id="submit" value="Search"/>
            </form><br>

            <?php

            //   $sql = "SELECT * FROM Properties WHERE Active = 1";
            //   $result = mysqli_query($conn, $sql);

              if (isset($_POST['submit'])){
                  header("Location: ./inspections_searchresults.php?searchterm=".$_POST["searchterm"]);
              }

            ?>



            </div>

            <div class="grid-item item2"></div>
            <div class="grid-item item3">

            <?php

                $sql = "SELECT * FROM Inspections";
                $result = mysqli_query($conn, $sql);

              ?>

              <?php
              if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
                      ?><div class="container">

                          <p class="Row"><?php echo
                          "InspectionID: ".
                           $row["InspectionID"]." |  ".
                           "Company: ".
                           $row["Company"]." |  ".
                           "Date: ".
                           $row["Date"]." |  ".
                           "Service Description: ".
                           $row["ServiceDescription"]." |  ".
                           "Frequency: ".
                           $row["Frequency"]." |  ".
                           "PropertyID: ".
                           $row["PropertyID"]?></p>
                          <a class="edit" href="./inspectionsEditPage.php?InspectionID=<?php echo $row['InspectionID'];?>"><span class="material-symbols-outlined">edit</span></a>
                          <a class="bin" href="./inspectionsDelete.php?InspectionID=<?php echo $row['InspectionID'];?>"><span class="material-symbols-outlined">delete</span></a>
                          <hr />
                      </div>
                      <?php
                  }
              }else{
                  echo "No Inspections have been made";
              }

              $conn->close();
            ?>

            </div>  

        </div>
        
    </div>
    
    </body>
</html>