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
    <title>Home page</title>
    <link rel="stylesheet" href="styles/styleManageAccounts.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
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

            <label class="title">Accounts</label>

            <!-- search form -->
            <form class = "searchbarManageAccounts" name="search" action="<?php echo $_SERVER ['PHP_SELF']; ?>" method='post'>
                <input type="text" name="searchterm" id="searchterm" placeholder="Search"/>
                <input type="submit" name="submit" id="submit" value="Search"/>
            </form><br>

            <?php

            

              if (isset($_POST['submit'])){
                  header("Location: ./blog_searchresults.php?searchterm=".$_POST["searchterm"]);
              }

            ?>



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
                          
                          <?php if($id == $row["AccountID"]){?>
                                <p class="Row"><?php echo $row["AccountID"]." |  ".$row["AccessLevel"]." |  ".$row["Username"]." ";?></p>
                                <a class="edit" href="./editPage.php?AccountID=<?php echo $row['AccountID'];?>"><span class="material-symbols-outlined">edit</span></a>
                          <?php }else{ ?>

                          <p class="Row"><?php echo $row["AccountID"]." |  ".$row["AccessLevel"]." |  ".$row["Username"];?></p>
                          <a class="edit" href="./editPage.php?AccountID=<?php echo $row['AccountID'];?>"><span class="material-symbols-outlined">edit</span></a>
                          <a class="bin" href="./deleteFunction.php?AccountID=<?php echo $row['AccountID'];?>"><span class="material-symbols-outlined">delete</span></a>
                          <?php }?>
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