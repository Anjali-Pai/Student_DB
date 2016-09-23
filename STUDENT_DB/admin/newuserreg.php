<?php
session_start();
  
  include_once("connect.php");
if(isset($_SESSION['user']))
{
?>
<!DOCTYPE html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>new student registration page</title>
<style type="text/css">
<!--
#apDiv1 {
	position:absolute;
	left:5px;
	top:9px;
	width:1104px;
	height:33px;
	z-index:1;
}
#apDiv1 div {
	font-family: Georgia, Times New Roman, Times, serif;
}
#apDiv2 {
	position:absolute;
	left:4px;
	top:56px;
	width:602px;
	height:27px;
	z-index:2;
}
body {
	background-color: #FFF;
}
#apDiv3 {
	position:absolute;
	left:244px;
	top:4px;
	width:47px;
	height:61px;
	z-index:1;
}
-->
</style>
<link href="buttonclass.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
@import url("*.css");
-->
</style>
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
        <a class="mdl-navigation__link" href="adminhome.php">Home</a>
        <a class="mdl-navigation__link" href="alogout.php">Logout</a>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">Title</span>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content"><!-- Your content goes here --></div>
    <div id="apDiv3" style="background-image:url(logo.jpg)"></div>
<div align="center" style="color:slategrey;font-size:25px;">NEW STUDENT REGISTRATION FORM
</div>
<form action="newstudinfo.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
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
  <table width="67%" border="0" align="center" bgcolor="#CCCCCC">
    <tr>
      <th width="30%" scope="col">&nbsp;</th>
      <th width="70%" scope="col"><label>
        
      </label></th>
    </tr>
    <tr>
      <td>Name:</td>
      <td><label>
        <input name="name" type="text" id="name" value="" />
      </label></td>
    </tr>
    <tr>
      <td>Branch:</td>
      <td><label>
        <select name="branch" id="branch">
          <option>IT</option>
          <option>CS</option>
          <option>EXTC</option>
        </select>
      </label></td>
    </tr>
    <tr>
      <td>Roll_no:</td>
      <td><label>
        <input name="Roll_no" type="text" id="Roll_no" maxlength="8" />
      </label></td>
    </tr>
    <tr>
      <td height="102">Photo:</td>
      <td><label>
        <input type="file" name="new_img" id="new_img" accept="image/jpeg"/>
      </label></td>
    </tr>
    <tr>
      <td>Mobile:</td>
      <td><label>
        <input name="mobile" type="text" id="mobile" maxlength="10" />
      </label></td>
    </tr>
    <tr>
      <td>Address:</td>
      <td><label>
        <textarea name="address" id="address"></textarea>
      </label></td>
    </tr>
    <tr>
      <td height="43">Email Id:</td>
      <td><label>
        <input name="email_id" type="text" id="email_id" maxlength="50" />
      </label></td>
    </tr>
    <td>cet:</td>
      <td><label>
        <input name="cet" type="number" id="cet" maxlength="10" />
      </label></td>
    </tr>
    <td>ssc:</td>
      <td><label>
        <input name="ssc" type="number" id="ssc" maxlength="10" />
      </label></td>
    </tr>
    <td>hsc:</td>
      <td><label>
        <input name="hsc" type="number" id="hsc" maxlength="10" />
      </label></td>
    </tr>
    <td>quota:</td>
      <td><label>
        <input name="quota" type="text" id="quota" maxlength="10" />
      </label></td>
    </tr>
    <td>rank:</td>
      <td><label>
        <input name="rank" type="number" id="rank" maxlength="10" />
      </label></td>
    </tr>
  </table>
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
    echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"1 ; url=newuserreg.php\" >";
    
  }
}
?>
  <div align="center">
    <table width="67%" border="0" bgcolor="#CCCCCC">
      <tr>
        <td width="212" height="62">Year:</td>
        <td width="499"><label>
          <label>
            <select name="year" id="year">
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
            </select>
          </label>
          <div align="left"></div>
        </label>        </td>
      </tr>
      <tr>
      
    </table>
  </div>
  <p>&nbsp;</p>
  <table width="19%" height="28" border="0" align="center">
    <tr>
      <th scope="col"><input type="submit" name="Submit" id="Submit" value="Submit"  style="background-color:#06F;color:#FFF;border-style:solid;border:thick;size:landscape;text-decoration:blink " /></th>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
<?php
if(isset($_POST['Submit'] ) )
{
  include("connect.php");
  $name=$_POST['name'];
  $address=$_POST['address'];
  $mobile=$_POST['mobile'];
  $branch=$_POST['branch'];
  $roll_no=$_POST['Roll_no'];
  $email_id=$_POST['email_id'];
  $year=$_POST['year'];
  $cet=$_POST['cet'];
  $ssc=$_POST['ssc'];
  $hsc=$_POST['hsc'];
  $quota=$_POST['quota'];
  $rank=$_POST['rank'];
  
  // Make sure the user actually 
// selected and uploaded a file
/*if (isset($_FILES['new_img']) && $_FILES['new_img']['size'] > 0) { 

          // Temporary file name stored on the server
          $tmpName  = $_FILES['new_img']['tmp_name'];  
           
          // Read the file 
          $fp     = fopen($tmpName, 'r');
          $data = fread($fp, filesize($tmpName));
          $data = addslashes($data);
          fclose($fp);
          

         
         
          
}
else {
  
}*/

  $sqlcheck="select * from info where roll_num='$roll_no'";
  $strcheck=@mysql_query($sqlcheck,$db);
  $numrows=@mysql_num_rows($strcheck);
  if($numrows!=0)
  {
    $sqlStr="insert into info(roll_num,name,address,email_id,branch,mobile,year,cet,ssc,hsc,quota,rank) values('$roll_no','$name','$address','$email_id','$branch','$mobile','$year','$cet','$ssc','$hsc','$quota','$rank')";
    @mysql_query($sqlStr);
    if($year==1)
    {
      $query="insert into semester1(roll_num) values('$roll_no')";
      @mysql_query($result);
      $query1="insert into semester2(roll_num) values('$roll_no') ";
      @mysql_query($result);
    }
    else if($year==2)
    {
      $query="insert into semester3(roll_num) values('$roll_no')";
      @mysql_query($result);
      $query1="insert into semester4(roll_num) values('$roll_no') ";
      @mysql_query($result);
    }
    else if($year==3)
    {
      $query="insert into semester5(roll_num) values('$roll_no')";
      @mysql_query($result);
      $query1="insert into semester6(roll_num) values('$roll_no') ";
      @mysql_query($result);
    }
    else if($year==4)
    {
      $query="insert into semester7(roll_num) values('$roll_no')";
      @mysql_query($result);
      $query1="insert into semester8(roll_num) values('$roll_no') ";
      @mysql_query($result);
    }
    echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=newstudinfo.php\" >";
  }
  else
  {
    $message="This Contact already exists";
    echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=newuserreg.php?msg=$message\" >";
  }

}
?>
  </main>
</div>



<p>   </p>
</body>
</html><?php
}
else
{
echo "<META HTTP-EQUIV=\"refresh\" CONTENT=\"0 ; url=adminlogin.php\" >";
}
?>