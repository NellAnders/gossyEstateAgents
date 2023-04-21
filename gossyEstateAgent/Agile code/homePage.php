

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="styles/styleHome.css">
    
</head >
    <body>
    
    
    
    <div class="container">

      <div class="griditem1">
        <h1></h1>

        <?php
            session_start();
            $accessLevel = $_SESSION['accessLevel'];

            if($accessLevel == 'Full'){
                include ("navs/homeNav.php");
            }else{
                include("navs/homeNavAlt.php");
            }

            // include ("navs/homeNav.php");
        ?>

        <div><a href='logout.php'><li class="signOut">Logout</a></div>

      </div>

      <div class="grid-item item2">

        <div class="grid-container">
            <div class="grid-item item1">Properties</div>
            <div class="grid-item item2">Tenants</div>
            <div class="grid-item item3">Landlords</div>  
            <div class="grid-item item4">Inspections</div>
            
        </div>
        
    </div>
    
    </body>
</html>


