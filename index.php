<?php
INCLUDE("security.php");
INCLUDE("addPost.php");
post();
if(security_validate()){
   security_login();
}
?>
<html>
   <head>
      <title>Login Page</title>
      <link rel='stylesheet' href='css/main.css'>
   </head>
   <body>
         <div>
            <div>
               <?php if(!security_loggedIn()): ?>
                <h1>Logged Out</h1>
               <button><a href='signup.php'>Sign Up</a></button>
               <button><a href='login.php'>Login</a></button>
               <?php else: ?>
                  <div class="container">
                     <h1>Logged In</h1>
                     
                     <div class='post-container'>
                        <button><a href='post.php'>Create A Post</a></button>
                     </div>
                     <footer>
                        <button><a href='logout.php'>Log Out</a></button>
                        <button><a href='update.php'>Change Your Password</a></button>
                        <button><a href='remove.php'>Delete Your Account</a></button>
                     </footer>
                  </div>
               <?php endif; ?>
            </div>	
         </div>	
   </body>
</html>