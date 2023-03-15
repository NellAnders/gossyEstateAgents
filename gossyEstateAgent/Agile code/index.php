<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleLogin.css">
    <title>Log in</title>
</head>
<body>
    


<div class="grid-container">

    <div class="grid-item item1">
        <h2>

        </h2>
    </div>

    <div class="grid-item item2">
        <form action="login_process.php" method="post" name="login">


                <p style="text-decoration: underline;">Username</p>
            <input type="text" name="username" placeholder="Enter username..." required /><br>

                <p style="text-decoration: underline;">password</p>
            <input type="password" name="password" placeholder="Enter password..." required /><br>

            <input name="submit" type="submit" value="Log in" />
        </form>
    </div>
</div>




</body>
</html>