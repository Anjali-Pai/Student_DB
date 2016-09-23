<?php
/*session_start();  
if(isset($_SESSION['user']))
    unset($_SESSION['user']); 
if(isset($_SESSION['views']))
    unset($_SESSION['views']);*/
?>
<?php
session_start(); 
session_destroy();
echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=adminlogin.php\" >";
?>