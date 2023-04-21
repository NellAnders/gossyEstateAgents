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

      <div class="grid-item item2">

      <div class="title">
            <p>Account Creation<p>
            <hr/>
        </div>
        <form action="register_process.php" method="post" name="login">

            <div class="username">
              <p>Username</p>
              <input type="text" name="username" placeholder="Enter username..." required /><br>
            </div>

            <div class="password">
              <p>Password</p>
              <input type="password" name="password" placeholder="Enter password..." required /><br>
            </div>

            <div class="accessLevel">
              <p>Access Level</p>
              <input type="text" name="accessLevel" placeholder="Enter access Level..." required /><br>
            </div>

            <input name="submit" type="submit" value="Register" />
        </form>
      </div>
    </div>


</body>
</html>