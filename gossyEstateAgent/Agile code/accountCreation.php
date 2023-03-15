<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>





    <div class="grid-container">

      <div class="grid-item item1">
        <?php
            include ("nav.php");
        ?>

        <br>
        <br>
        <h2>
        </h2>
      </div>

      <div class="grid-item item2">
        <p>Gossy Estate Agents</p>

        <form action="register_process.php" method="post" name="login">
                <p style="text-decoration: underline;">Username</p>
            <input type="text" name="username" placeholder="Enter username..." required /><br>

                <p style="text-decoration: underline;">Password</p>
            <input type="password" name="password" placeholder="Enter password..." required /><br>

            <p style="text-decoration: underline;">Access Level</p>
            <input type="text" name="accessLevel" placeholder="Enter Access Level" required /><br>

            <input name="submit" type="submit" value="Register" />
        </form>
      </div>
    </div>


</body>
</html>