<?php
session_start();
if(isset($_SESSION['user']))
{
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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
<link href="link1.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://code.getmdl.io/1.2.1/material.indigo-pink.min.css">
<script defer src="https://code.getmdl.io/1.2.1/material.min.js"></script>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
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
    <form id="form1" name="form1" method="post" action="">
  Year:
  <label>
    <select name="year" id="year">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
    </select>
  </label>
  Branch:
  <label>
    <select name="branch" id="branch">
      <option>IT</option>
      <option>CS</option>
      <option>EXTC</option>
    </select>
  </label>
  <label>
    <input type="submit" name="Submit" id="Submit" value="Submit" style="background-color:#03F;color:#FFF" />
  </label>
  </form>
  <div class="col-lg-12"style="margin-top:25px;"></div>
  <?php
    if(isset($_POST['Submit']))
            {
              include_once("connect.php");
              $year=$_POST['year'];
              $branch=$_POST['branch'];
              
                $query="select roll_num,name from info where branch='$branch' and year='$year'";
                $result=mysql_query($query,$db);
                
                
                
              
              while($row=mysql_fetch_array($result,MYSQL_BOTH))
                             {
                               $roll_no=$row['roll_num'];
                               $name=$row['name'];
                               
                             
                               
                              
              
              
             ?>




<table width="63%" border="0" align="center" style="background-color:#CCC">
  <tr>
    <td width="35%"><?php echo "$roll_no"; ?>      <div align="left"></div></td>
    <td width="37%"><?php echo"$name"; ?>
    <div align="left"></div></td>
    <td width="28%"><div align="left"><a href="selectsem.php?enter=<?php echo $row['roll_num']?>" class="link1">Marks</a><a href="inotice.php?notice=<?php echo $row['roll_num']?>"><a><a href="editstudinfo.php?edit=<?php echo $row['roll_num']?>">    <span class="link1">Edit</span></a></div></td>
  </tr>
  <?php
                             
                             }
                             ?>
                             
</table>
<p>&nbsp;</p>


<div id="apDiv3" style="background-image:"></div>


<?php
}
?>
</div>
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
