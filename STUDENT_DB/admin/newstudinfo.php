<?php
ob_start();
session_start();
if(isset($_SESSION['user']))
{
?><!DOCTYPE html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>NEW STUDENT INFO</title>
<style type="text/css">
<!--
#apDiv3 {
	position:absolute;
	left:244px;
	top:4px;
	width:47px;
	height:61px;
	z-index:1;
	background-image: url(logo.jpg);
}
-->
</style>
</head>

<body>
<div id="apDiv3" style="background-image:url(logo.jpg)"></div>
<div align="center">
  <h1><strong>ST FRANCIS INSTITUTE OF TECHNOLOGY</strong></h1>
  <p>&nbsp;</p>
</div>

    <?php
	include_once("connect.php");
	if(isset($_POST['Submit'])) {
						   $name=$_POST['name'];
						   $branch=$_POST['branch'];
						   $roll_no=$_POST['Roll_no'];
						   $mobile=$_POST['mobile'];
						   $address=$_POST['address'];
						   $email_id=$_POST['email_id'];
						   $year=$_POST['year'];
						   $cet=$_POST['cet'];
	                       $ssc=$_POST['ssc'];
	                       $hsc=$_POST['hsc'];
	                       $quota=$_POST['quota'];
	                       $rank=$_POST['rank'];

						   $photo=$_FILES['new_img'];
	
	$sqlStr="insert into info(roll_num,name,address,email_id,branch,mobile,year,cet,ssc,hsc,quota,rank) values('$roll_no','$name','$address','$email_id','$branch','$mobile','$year','$cet','$ssc','$hsc','$quota','$rank')";
		@mysql_query($sqlStr);
		
		include_once('connect.php');
		$sqlstr1="insert into attendance(roll_num,branch,year) values('$roll_no','$branch','$year')";
		@mysql_query($sqlstr1,$db);
		if($year=='1')
		{
			$query="insert into semester1(roll_num) values('$roll_no')";
			@mysql_query($query);
			$query1="insert into semester2(roll_num) values('$roll_no') ";
			@mysql_query($query1);
		}
		else if($year==2)
		
		{
			$query="insert into semester1(roll_num) values('$roll_no')";
			@mysql_query($query);
			$query1="insert into semester2(roll_num) values('$roll_no') ";
			@mysql_query($query1);
			$query2="insert into semester3(roll_num) values('$roll_no')";
			@mysql_query($query2);
			$query3="insert into semester4(roll_num) values('$roll_no') ";
			@mysql_query($query3);
		}
		else if($year==3)
		{
			$query="insert into semester1(roll_num) values('$roll_no')";
			@mysql_query($query);
			$query1="insert into semester2(roll_num) values('$roll_no') ";
			@mysql_query($query1);
			$query2="insert into semester3(roll_num) values('$roll_no')";
			
			@mysql_query($query2);
			$query3="insert into semester4(roll_num) values('$roll_no')";
			
			@mysql_query($query3);
			
			
			$query4="insert into semester5(roll_num) values('$roll_no')";
			@mysql_query($query4);
			$query5="insert into semester6(roll_num) values('$roll_no') ";
			@mysql_query($query5);
		}
		else if($year==4)
		{
			$query="insert into semester1(roll_num) values('$roll_no')";
			@mysql_query($query);
			$query1="insert into semester2(roll_num) values('$roll_no') ";
			@mysql_query($query1);
			$query2="insert into semester3(roll_num) values('$roll_no')";
			
			@mysql_query($query2);
			$query3="insert into semester4(roll_num) values('$roll_no')";
			
			@mysql_query($query3);
			
			
			$query4="insert into semester5(roll_num) values('$roll_no')";
			@mysql_query($query4);
			$query5="insert into semester6(roll_num) values('$roll_no') ";
			@mysql_query($query5);
			$query6="insert into semester7(roll_num) values('$roll_no')";
			@mysql_query($query6);
			$query7="insert into semester8(roll_num) values('$roll_no') ";
			@mysql_query($query7);
		}
	}
				   
	?>					   
						   
	<div align="center"></div>
<table width="67%" height="519" border="0" align="center" style="background-color:#CCC">
  <tr>
    <td width="44%">Name:</td>
    <td width="56%"><?php if(!empty($name)){echo "$name"; }?>	</td>
  </tr>
  <tr>
    <td>Branch:</td>
    <td><?php if(!empty($branch)){echo "$branch";} ?> </td>
  </tr>
  <tr>
    <td>Roll_no:</td>
    <td><?php if(!empty($roll_no)){echo "$roll_no";} ?></td>
  </tr>
  <tr>
    <td>Photo:</td>
   <td><?Php /* echo $photo */ ?></td>
  </tr>
  <tr>
    <td>Mobile:</td>
    <td> <?php if(!empty($mobile)){echo "$mobile";} ?> </td>
  </tr>
  <tr>
    <td>Address:</td>
    <td><?php if(!empty($address)) {echo "$address";} ?></td>
  </tr>
  <tr>
    <td>Email Id:</td>
    <td><?php if(!empty($email_id)){ echo "$email_id";} ?></td>
  </tr>
  <tr>
    <td>Year:</td>
    <td><?php if(!empty($year)){echo "$year";} ?></td>
  </tr>\<tr>
    <td>CET:</td>
    <td><?php if(!empty($cet)){echo "$cet";} ?></td>
  </tr>
  <tr>
    <td>SSC:</td>
    <td><?php if(!empty($ssc)){echo "$ssc";} ?></td>
  </tr>
  <tr>
    <td>HSC:</td>
    <td><?php if(!empty($hsc)){echo "$hsc";} ?></td>
  </tr>
  <tr>
    <td>QUOTA:</td>
    <td><?php if(!empty($quota)){echo "$quota";} ?></td>
  </tr>
  <tr>
    <td>Rank:</td>
    <td><?php if(!empty($rank)){echo "$rank";} ?></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
	
</table>
<p align="center"><a href="newuserreg.php">Return to registration page</a></p>

	
    
</body>
</html>
<?php
}
else
{
echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=adminlogin.php\" >";
}
?>