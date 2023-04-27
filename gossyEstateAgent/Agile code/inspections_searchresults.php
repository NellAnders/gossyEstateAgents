<?php


include('databaseConn.php');

$search_term = $_GET["searchterm"];

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="styles/styleManageAccounts.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    
</head >
<body>

    
    <!-- container this will take all results from our table and post them onto our page -->
    <?php
    $sql = "SELECT * FROM Inspections WHERE InspectionID LIKE '%$search_term%'
     OR Company LIKE '%$search_term%' OR Date LIKE '%$search_term%'
      OR ServiceDescription LIKE '%$search_term%' OR Frequency LIKE '%$search_term%' OR PropertyID LIKE '%$search_term%'";
      
    $result = mysqli_query($conn, $sql);
    ?>


    <div class="container">

      <div class="griditem1">
        <h1></h1>

        <?php 
          include("navs/tableNavSearch.php");
          ?>
          <li class='logOut'><a href='logout.php'>Log out</a></li>
          <?php
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
            <a class="arrowback" href="inspections.php"><span class="material-symbols-outlined">arrow_back</span></a>

            </div>

            <div class="grid-item item2"></div>
            <div class="grid-item item3">

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
                    } else {
                        echo "No results found. try search again";
                    }

                    $conn->close();
                ?>


            </div>  

        </div>
        
    </div>
    
    </body>
</html>