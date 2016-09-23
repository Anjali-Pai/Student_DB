<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LOGIN</title>
<style type="text/css">
<!--
#apDiv3 {
	position:absolute;
	left:245px;
	top:6px;
	width:47px;
	height:61px;
	background-repeat: no-repeat;
	visibility: visible;
	background-image: url(logo.jpg);
}
#apDiv1 {
	position:absolute;
	left:320px;
	top:80px;
	width:432px;
	height:24px;
	z-index:2;
}
-->
</style>
<link href="logo.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head> 

<body>
	<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout  mdl-layout--fixed-header">
  <header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title col-lg-push-4 display-1">ST FRANCIS INSTITUTE OF TECHNOLOGY</span>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Title</span>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content"><!-- Your content goes here --></div>
    <div align="center">
  
  <div>
    <h3>Admin login page</h3>
  </div>
  <form id="form1" name="form1" method="post" action="">
    <?php
					if(isset($_REQUEST['msg']))
					{
						$msg=$_REQUEST['msg'];
					}
					else
					{
						$msg="";
					}
					?>
    <table width="67%" border="0" style="background-color:#CCC">
      <tr>
        <td width="49%">&nbsp;</td>
        <td width="50%">&nbsp;</td>
      </tr>
      <tr>
        <td><div align="center">Username:</div></td>
        <td><label>
          <input type="text" name="username" id="username" />
        </label></td>
      </tr>
      <?php
					if(isset($_REQUEST['msg']))
					{
						$msg=$_REQUEST['msg'];
					}
					else
					{
						$msg="";
					}
					?>
      <tr>
        <td><div align="center">Password:</div></td>
        <td><label>
          <input type="password" name="password" id="password" />
        </label></td>
      </tr>
      <tr>
        <td colspan="2"><label> </label>
          <div align="center"></div></td>
        <td width="1%">&nbsp;</td>
      </tr>
    </table>
    <p>
    	<div class="col-lg-12">
    <input type="submit" name="adminsubmit" id="adminsubmit" value="Submit" style="background-color:#06C;color:#FFF"/>
  	</div>
  </p>
  </form>
  
</div>
<div id="apDiv3" style="background-image:"></div>

  </main>
</div>
<?php
if(isset($_POST['adminsubmit']))
{
	
	include("connect.php");
	$uname=$_POST['username'];
	$pass=$_POST['password'];
		$chklogin="select * from adminlogin where Username='$uname' and Password='$pass'";
	$strcheck=mysql_query($chklogin,$db);
	$numrows=mysql_num_rows($strcheck);
	if($numrows==0)
	{
		$msg="Incorrect Login";
		echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=adminlogin.php?msg=$msg\" >";
	}
	else
	{
		//echo $numrows;
		$_SESSION['user']=$uname;
		//echo $_SESSION['user'];
		//header("Location:viewContact.php");
		echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"1 ; url=adminhome.php\" >";
		
	}
}
?>
</body>
</html>