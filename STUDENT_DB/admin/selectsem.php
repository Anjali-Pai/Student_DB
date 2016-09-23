<?php
session_start();
if(isset($_SESSION['user']))
{
?>
<!DOCTYPE html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Select Semester</title>
<style type="text/css">
<!--
#apDiv3 {position:absolute;
	left:244px;
	top:4px;
	width:47px;
	height:61px;
	z-index:1;
}
-->
</style>
<style type="text/css" media="all">
<!--
@import url("*.css");
-->
</style>
</head>

<body>
<div align="center">
  <h1><strong>ST FRANCIS INSTITUTE OF TECHNOLOGY</strong></h1>
</div>
<div id="apDiv3" style="background-image:url(logo.jpg)"></div>
<?php
if(isset($_REQUEST['enter']))
{ include_once("connect.php");
	$roll_no=$_REQUEST['enter'];
	}


?>
<div>
  <table width="67%" border="0" align="center" style="background-color:#CCC">
    <tr>
      <td width="45%">&nbsp;</td>
      <td width="34%">&nbsp;</td>
      <td width="21%">&nbsp;</td>
    </tr>
    <tr>
      <td>Semester 1</td>
      <td><a href="semester1.php?sem1marks=<?php echo "$roll_no" ?>" >Marks</a></td>
      <td><a href="semester1.php?sem1marks=<?php echo "$roll_no" ?>" >iat1</a></td>
      <td>&nbsp;</td>

    </tr>
    <tr>
      <td>Semester 2</td>
      <td>&nbsp;<a href="semester2.php?sem1marks=<?php echo "$roll_no" ?>" >Marks</a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Semester 3</td>
      <td>&nbsp;<a href="semester3.php?sem1marks=<?php echo "$roll_no" ?>" >Marks</a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Semester 4</td>
      <td>&nbsp;<a href="semester4.php?sem1marks=<?php echo "$roll_no" ?>" >Marks</a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Semester 5</td>
      <td>&nbsp;<a href="semester5.php?sem1marks=<?php echo "$roll_no" ?>" >Marks</a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Semester 6</td>
      <td>&nbsp;<a href="semester6.php?sem1marks=<?php echo "$roll_no" ?>" >Marks</a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Semester 7</td>
      <td>&nbsp;<a href="semester7.php?sem1marks=<?php echo "$roll_no" ?>" >Marks</a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Semester 8</td>
      <td>&nbsp;<a href="semester8.php?sem1marks=<?php echo "$roll_no" ?>" >Marks</a></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  
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