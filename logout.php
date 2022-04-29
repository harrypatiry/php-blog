<?php
INCLUDE ("security.php");
if(security_loggedIn()) {
security_logout();
} else { 
    echo("<button><a href='index.php'>Home</a></button>");
}
?>