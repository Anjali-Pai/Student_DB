<?php

  $db=mysql_connect("localhost","root","")
  or die("Could not connect");
  
  $dbname="student";
  

mysql_select_db($dbname,$db)
  or die("Could not select database");
?>