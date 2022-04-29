<?php
INCLUDE("security.php");
if(security_validate()){
   security_login();
}
?>
<html>
   <head>
      <title>Login Page</title>
   </head>
   <body>
         <div>
            <div>
               <?php if(!security_loggedIn()): ?>
               <h1>Login</h1>
               <form action="login.php" method="POST">
                  <label>Username: </label><input type="text" name="username" /><br />
                  <label>Password: </label><input type="password" name="password" /><br />
                  <input type="submit" />
               </form>
               <button><a href='signup.php'>Sign Up</a></button>
               <button><a href='update.php'>Change Your Password</a></button>
               <button><a href='remove.php'>Delete Your Account</a></button>
               <?php else: ?>
                  <h1>Logged In</h1>
                  <button><a href='index.php'>Home</a></button> 
               <?php endif; ?>
            </div>	
         </div>	
   </body>
</html>