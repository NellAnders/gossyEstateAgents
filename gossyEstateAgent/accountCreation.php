<?php

 
// Define variables and initialize with empty values
$username = $password = $email = "";
$usernameErr = $passwordErr = $emailErr = "";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link rel="stylesheet" href="style.css">
    
</head >
    <body>
    
    
    
    <div class="grid-container">

      <div class="grid-item item1">
        <h1></h1>

        <div class="home" ><a href="homePage.php">Home</a></div>

        <div class="signedIn" ><label class="signedIn label">Signed in as: </label></div>

        <div class="signOut" ><a href="page2.html">Sign out</a></div>

      </div>

      <div class="grid-item item2">
        <h4>Gossy Estate Agents</h4>

        <div class="accountCreation">
        <form>
            <div class="form-group emailLabel">
                <label>Email</label>
            </div> 

            <div class="form-group emailInput">
                <input type="text" name="username" class="form-control <?php echo (!empty($emailErr)) ? 'is-invalid' : ''; ?>" >
                <span class="invalid-feedback"><?php echo $emailErr; ?></span>
            </div> 

            <div class="form-group usernameLabel">
                <label>Username</label>
            </div>  

            <div class="form-group usernameInput">
                <input type="text" name="username" class="form-control <?php echo (!empty($usernameErr)) ? 'is-invalid' : ''; ?>" >
                <span class="invalid-feedback"><?php echo $usernameErr; ?></span>
            </div>  

            <div class="form-group passwordLabel">
                <label>Password</label>
            </div>

            <div class="form-group passwordInput">
                <input type="password" name="password" class="form-control <?php echo (!empty($passwordErr)) ? 'is-invalid' : ''; ?>" >
                <span class="invalid-feedback"><?php echo $passwordErr; ?></span>
            </div>

            <div class="form-group checkbox">
                <input type="checkbox" class="checkbox" value="Admin">
                <label>Admin Account</label>
            </div>

            <div class="form-group Buttons">
                <input type="submit" class="btn btn-primary" value="Create Account">
            </div>
        </form>
      </div>
        
    </div>
    
    </body>
</html>


