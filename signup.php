<?php
INCLUDE("security.php");
$exists = false;
if(security_validate()) {
   security_addNewUser();
   $exists=true;
}
?>
<html>
   <head>
      <title>Sign up page</title>
   </head>
   <body>
      <div>
      <?php if(!security_loggedIn() && !$exists): ?>
         <h1>Sign Up</h1>
            <div>
                <form action= "signup.php" method= "POST">
                  <label>Username: </label><input type="text" name="username" id="username"/><br />
                  <label>Password: </label><input type="password" name="password" id="password"/><br />
                  <input type="submit" value="Submit"/>
               </form>
               <?php elseif($exists): ?>
                  <button><a href='index.php'>Home</a></button>
               <?php else: ?>
                  <p>Cannot create new account while logged in to an existing account<a href="logout.php">Logout</a></p>
               <?php endif; ?>  
            </div>	
         </div>	
   </body>
</html>