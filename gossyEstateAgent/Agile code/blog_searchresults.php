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
    $sql = "SELECT * FROM Accounts WHERE AccountID LIKE '%$search_term%' OR AccessLevel LIKE '%$search_term%' OR Username LIKE '%$search_term%'";
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

            <label class="title">Accounts</label>
            <a class="arrowback" href="manageAccounts.php"><span class="material-symbols-outlined">arrow_back</span></a>

            </div>

            <div class="grid-item item2"></div>
            <div class="grid-item item3">

                <?php
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            ?><div class="container">
                                <?php if($id == $row["AccountID"]){?>
                                    <p class="Row"><?php echo $row["AccountID"]." ".$row["AccessLevel"]." ".$row["Username"];?></p>
                                    <a class="edit" href="./editPage.php?AccountID=<?php echo $row['AccountID'];?>"><span class="material-symbols-outlined">edit</span></a>
                                <?php }else{ ?>

                                    <p class="Row"><?php echo $row["AccountID"]." ".$row["AccessLevel"]." ".$row["Username"];?></p>
                                    <a class="edit" href="./editPage.php?AccountID=<?php echo $row['AccountID'];?>"><span class="material-symbols-outlined">edit</span></a>
                                    <a class="bin" href="./deleteFunction.php?AccountID=<?php echo $row['AccountID'];?>"><span class="material-symbols-outlined">delete</span></a>
                                <?php }?>
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