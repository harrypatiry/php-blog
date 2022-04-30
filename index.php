<?php
INCLUDE("security.php");
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
                  <div>
                     <h1>Logged In</h1>
                        <button><a href='post.php'>Create A Post</a></button>
                        <div>
                           <?php 
                           global $connection;
                           
                           // Server
                           $server = "localhost";
                           // Username
                           $username = "root";
                           // If using XAMPP, 
                           //  the password is an empty string.
                           $password = "";
                           // Database
                           $database = "lab";
                           // Use the global connection
                           $connection = mysqli_connect($server, $username, $password, $database);
                           if($connection == null) {
                              $connection = mysqli_connect($server, $username, $password, $database);
                           }
                           
                           $sql = "SELECT * FROM posts";
                           $result = mysqli_query($connection, $sql);
                           
                           if(isset($_POST["new_post"])) {
                              $title = $_POST["title"];
                              $text = $_POST["text"];
                              $sql = "INSERT INTO posts(title, text) VALUES('$title', '$text')";
                              mysqli_query($connection, $sql);
                           }
                           while ($row = mysqli_fetch_assoc($result)) {
                              echo "<div>";
                              echo "<h1>" . $row['title'] . "</h1>"; 
                              echo "<p>" . $row['text'] . "</p>"; 
                              echo "</div>";
                           } ?>
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