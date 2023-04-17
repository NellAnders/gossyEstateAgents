

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="styles/styleManageAccounts.css">
    
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
        ?>



      </div>

      <div class="grid-container-parent">

        <div class="grid-container">
            <div class="grid-item item1">
            <!-- <a href='homePage.php' class="addNew">Add New</a> -->

            <label class="title">Accounts</label>

            <form action="accountsSearch.php" method="GET">
              <input class="searchbar" type="text" name="search" placeholder="Search..">
              <input type="submit" value="Search" />
            </form>
            </div>

            <div class="grid-item item2"></div>
            <div class="grid-item item3">

            <?php

              $sql = "SELECT * FROM Accounts";
              $result = mysqli_query($conn, $sql)

              ?>

              <?php

              if(mysqli_num_rows($result) > 0){
                  while($row = mysqli_fetch_assoc($result)){
                      ?><div class="container">
                          <p class="Row"><?php echo $row["AccountID"]." ".$row["Access Level"]." ".$row["Username"];?></p>
                          <hr />
                      </div>
                      <?php
                  }
              }else{
                  echo "No Accounts have been made";
              }

              $conn->close();
            ?>

            </div>  

        </div>
        
    </div>
    
    </body>
</html>