<?php

 
// Define variables and initialize with empty values
$username = $password = $confirm_password = "";
$username_err = $password_err = $confirm_password_err = "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="styleLogin.css">
    
</head >
    <body>
    
    
    
    <div class="grid-container">

      <div class="grid-item item1">
        <h1></h1>
      </div>

      <div class="grid-item item2">
        <h4>Gossy Estate Agents</h4>
        <div class="login">
        <form>
            <div class="form-group usernameLabel">
                <label>Username</label>
            </div>    

            <div class="form-group usernameInput">
                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" >
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>  

            <div class="form-group passwordLabel">
                <label>Password</label>
            </div>

            <div class="form-group passwordInput">
                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" >
                <span class="invalid-feedback"><?php echo $password_err; ?></span>
            </div>  

            <div class="form-group Buttons">
                <input type="submit" class="btn btn-primary" value="Login">
                <input type="reset" class="btn btn-secondary ml-2" value="Reset">
            </div>
        </form>
      </div>
        
    </div>
    
    </body>
</html>


