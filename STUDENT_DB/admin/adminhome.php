<?php
session_start();
if(isset($_SESSION['user']))
{
?>
<!DOCTYPE html 
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HOME</title>
<style type="text/css">
<!--
#apDiv3 {position:absolute;
	left:244px;
	top:4px;
	width:47px;
	height:61px;
	z-index:1;
}
.link2 {
  font-family: Georgia, "Times New Roman", Times, serif;
  color: black;
  text-decoration: underline;
}
-->
</style>
<link href="*.css" rel="stylesheet" type="text/css" />
<link href="link2.css" rel="stylesheet" type="text/css" />
<link href="logo.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>

<body>
<div class="mdl-layout  mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title col-lg-push-4 display-1">ST FRANCIS INSTITUTE OF TECHNOLOGY</span>
    <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation. We hide it in small screens. -->
      <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="alogout.php">Logout</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Title</span>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content"><!-- Your content goes here --></div>


<div id="apDiv3"></div>
<table width="60%" height="328" border="0" align="center" style="background-color:#CCC">
  <tr>
    <td><h2><div >&gt;&nbsp;&nbsp;&nbsp;<a href="newuserreg.php">New student Registration </a></div></h2></td>
  </tr>
  <tr>
    <td><h2><div>&gt;&nbsp;&nbsp;&nbsp;<a href="visual.php">View registered students </a></div></h2></td>
  </tr>
  <tr>
    <td ><h2><div>&gt;&nbsp;&nbsp;&nbsp;<a href="Viewstud.php" >Edit ,Insert Marks </a></div></h2></td>
  </tr>
  
  
  <tr>
    <td ><h2><div>&gt;&nbsp;&nbsp;&nbsp;<a href="attendance.php" >Attendance</a></div></h2></td>
  </tr>
   
</table>
  </main>
</div>


</body>
</html>
<?php
}
else
{
echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=adminlogin.php\" >";
}
?>
