<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/styleIndex.css">
    <title>Log in</title>
</head>
<body>
    


<div class="grid-container">

    <div class="grid-item item1">
        <h1>
            Gossy Estate Agents
        </h1>
    </div>

    <div class="grid-item item2">

        <div class="title">
            <p>Login<p>
            <hr />
        </div>
        <form action="login_process.php" method="post" name="login">

            <div class="username">
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter username..." required /><br>
            </div>

            <div class="password">
            <p>Password</p>
            <input type="Password" name="password" placeholder="Enter password..." required /><br>
            </div>

            <input name="submit" type="submit" value="Login" />
        </form>
    </div>
</div>




</body>
</html>