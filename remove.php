<?php
     INCLUDE("security.php");
     security_deleteUser();
?>

<html>
    <head>
      <title>Delete Your Account</title>
    </head>
    <body>
        <div>
        <?php if(security_loggedIn()): ?>
            <h1>Delete Your Account<h1>
            <form action="remove.php" method="POST">
                <label>Username: </label><input type="text" name="username" /><br />
                <label>Password: </label><input type="password" name="password" /><br />
                <input type="submit" />
            </form>  
            <?php else: ?>
                <h1>Logged out</h1>
                <button><a href='signup.php'>Sign Up</a></button> 
            <?php endif; ?>
        </div>
    </body>    
</html>