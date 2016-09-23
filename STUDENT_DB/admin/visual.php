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
  

<div class="col-lg-12">
  <div class="col-lg-12 col-lg-push-4">
  
<br>
<div class="col-lg-12">
<form id="form2" name="form2" method="post" action="">
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
  Subject:
  <label>
    <select name="subject" id="subject">
      <option>physics</option>
      <option>chemistry</option>
      <option>maths1</option>
      <option>eng_mech</option>
      <option>workshop</option>
      <option>cprog</option>
      <option>cproglab</option>
    </select>
  </label>
  

  <label>
    <input type="submit" name="Submit1" id="Submit1" value="Submit" style="background-color:#03F;color:#FFF" />
  </label>
</form>
</div>
</div>
<?php
    if(isset($_POST['Submit1']))
            {
              include_once("include/connection.php");
              $year=$_POST['year'];
              $branch=$_POST['branch'];
              $subject = $_POST['subject'];
              $result  = $_POST['result'];
              $query = $pdo->prepare("select roll_num,name from info where branch='$branch' and year='$year'");
              $query->execute();
              $rows = $query->fetchAll();
              $query1 = $pdo->prepare("select roll_num,$subject from semester1");
              
              $query1->execute();  
              $rows1 = $query1->fetchAll();
                
                $query2 = $pdo->prepare("select $subject from semester1");
              
              $query2->execute();  
              $rows2 = $query2->fetchAll();
             ?>




<table width="63%" border="0" align="center" style="background-color:#CCC">
  <tr>
    <td width="35%"> Roll Number     <div align="left"></div></td>
    <td width="37%">Marks
    <div align="left"></div></td>
    <td width="37%">Result  
  </tr>
  <tr>
<?php
$result_variable = 0;
$result_passed = -5;
$result_failed = 0;
  foreach ($rows1 as $key => $value) {
    foreach ($value as $k => $v) {
      if(!is_string($k)){
      ?>

  <td width="35%"><?php echo "$v"; ?> 

      <?php
      if ($v >= 35) {
        $result_variable= 1;
        $result_passed+=1;
      }else{
        $result_variable = 0;
        $result_failed+=1;
      }
    }
    }
    ?>
    <td width="37%"> <?php if($result_variable == 0) echo "Failed"; else echo "Passed";  ?>
    </tr><?php
  }

 ?>
</table>
<div>
  <span style="margin-left:500px; font-size:20px;">
    Number of students passed: <?php echo $result_passed; ?>
  </span> <br>
  <span style="margin-left:500px; font-size:20px;">
    Number of students failed: <?php echo $result_failed; ?>
  </span>
</div>
<p>&nbsp;</p>
<?php
}
?>
</div>


<!--Div that will hold the pie chart-->
    <div id="chart_div"class="col-lg-12 col-lg-push-4"></div>
<!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      // Load the Visualization API and the corechart package.
      google.charts.load('current', {'packages':['corechart']});

      // Set a callback to run when the Google Visualization API is loaded.
      google.charts.setOnLoadCallback(drawChart);

      // Callback that creates and populates a data table,
      // instantiates the pie chart, passes in the data and
      // draws it.
      function drawChart() {

        // Create the data table.
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Result');
        data.addColumn('number', 'Students');
        data.addRows([
          ['Passed', <?php echo $result_passed; ?>],
          ['Failed', <?php echo $result_failed; ?>]
        ]);
        // Set chart options
        var options = {'title':'Summary',
                       'width':400,
                       'height':300};

        // Instantiate and draw our chart, passing in some options.
        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>
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
