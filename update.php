<?php
    INCLUDE("security.php");
    security_updatePassword();
?>

<html>
    <head>
    <title>Update Your Password</title>
    </head>
    <body>
        <div>
            <h1>Update Your Password</h1>
            <form action="update.php" method="POST">
                <label>Username: </label><input type="text" name="username"/><br />
                <label>Password: </label><input type="password" name="password"/><br />
                <label>New Password:</label><input type="password" name="new_password"  /><br />
                <input type="submit" value="Submit"/>
            </form>
                <button><a href='index.php'>Home</a></button> 
                <button><a href='logout.php'>Log Out</a></button> 
        </div>
    </body>
</html>   