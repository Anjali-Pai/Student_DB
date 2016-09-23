<?php
session_start();
if(isset($_SESSION['user']))
{
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
</head>
<?php
if(isset($_REQUEST['sem1marks']))
				   {
					   include_once('connect.php');
					   $roll_no=$_REQUEST['sem1marks'];
					   $query="select * from semester1 where roll_num='$roll_no'";
$result=@mysql_query($query);
if($row=@mysql_fetch_array($result))
{   $roll_no=$row['roll_num'];
}
					   
					   
					   }




?>

<body>
<div align="center">
  <h1><strong>ST FRANCIS INSTITUTE OF TECHNOLOGY</strong></h1>
</div>
<div id="apDiv3" style="background-image:url(../logo1.jpg)"></div>
<div>
<?php
include_once('connect.php');

?>
  <form id="form1" name="form1" method="post" action="">
    <table width="123%" border="1">
      <tr>
        <td>Roll no:</td>
        <td>Physics</td>
        <td>Chemistry</td>
        <td>Maths1</td>
        <td>Eng_mech</td>
        <td>Workshop</td>
        <td>cprog</td>
        <td>cprog_lab</td>
        <td>eng_draw</td>
      </tr>
      <tr>
        <td><label>
          <input type="text" name="roll_no" id="roll_no" value="<?php echo"$roll_no" ?>" />
        </label></td
        > <td><label>
          <input type="text" name="physics" id="physics" />
        </label></td>
        <td><label>
          <input type="text" name="chemistry" id="chemistry" />
        </label></td>
        <td><label>
          <input type="text" name="maths1" id="maths1" />
        </label></td>
        <td><label>
          <input type="text" name="eng_mech" id="eng_mech" />
        </label></td>
        <td><label>
          <input type="text" name="workshop" id="workshop" />
        </label></td>
        <td><label>
          <input type="text" name="cprog" id="cprog" />
        </label></td>
        <td><label>
          <input type="text" name="cprog_lab" id="cprog_lab" />
        </label></td>
        <td><label>
          <input type="text" name="eng_draw" id="eng_draw" />
        </label></td>
      </tr>
    </table>
    <p>
      <input type="submit" name="Submitsem1m" id="Submitsem1m" value="Submit" />
    </p>
  </form>
  <?php
  include_once('connect.php');
  if(isset($_POST['Submitsem1m']))
  {
	 $roll_no= $_POST['roll_no'];
	 $physics=$_POST['physics'];
	 $chemistry=$_POST['chemistry'];
	 $maths1=$_POST['maths1'];
	 $eng_mech=$_POST['eng_mech'];
	 $workshop=$_POST['workshop'];
	 $cprog=$_POST['cprog'];
	 $cprog_lab=$_POST['cprog_lab'];
	 $eng_draw=$_POST['eng_draw'];
     $query="select * from semester1 where roll_num='$roll_no'";
	 $result=@mysql_query($query);
	 $rows=@mysql_num_rows($result);
	 if($rows==1)
	 { $update="update semester1 set subject1='$physics',subject2='$chemistry',subject3='$maths1',subject4='$eng_mech',subject5='$workshop',subject6='$cprog',subject7='$cprog_lab',subject8='$eng_draw' where roll_num='$roll_no'";
	 @MYSQL_QUERY($update);
	 header("location:Viewstud.php");
	 
	 
	 }
  }
?>  
  
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