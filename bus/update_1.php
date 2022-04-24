<?php
$busno = $_GET['busno'];
require('db.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Update Bus Information</title>
<link rel="stylesheet" href="css/style2.css" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="<script src="js/bootstrap.min.js"></script></script>
<script src="<script src="js/bootstrap.js"></script></script>
<script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
<?php
if (isset($_REQUEST['busno1']))
    {
                $busno1 = stripslashes($_REQUEST['busno1']);
		$busno1 = mysqli_real_escape_string($con,$busno);
                 $busname1= stripslashes($_REQUEST['busname1']);
		$busname1 = mysqli_real_escape_string($con,$busname1);
                $drivername1 = stripslashes($_REQUEST['drivername1']);
		$drivername1 = mysqli_real_escape_string($con,$drivername1);
		$start_station1 = stripslashes($_REQUEST['start_station1']);
		$start_station1 = mysqli_real_escape_string($con,$start_station1);
		$end_station1 = stripslashes($_REQUEST['end_station1']);
		$end_station1 = mysqli_real_escape_string($con,$end_station1);
		$routeno1 = stripslashes($_REQUEST['routeno1']);
		$routeno1 = mysqli_real_escape_string($con,$routeno1);
                $atiming1 = stripslashes($_REQUEST['atiming1']);
		$atiming1 = mysqli_real_escape_string($con,$atiming1);
		$dtiming1 = stripslashes($_REQUEST['dtiming1']);
		$dtiming1 = mysqli_real_escape_string($con,$dtiming1);
		$bstatus1 = stripslashes($_REQUEST['bstatus1']);
		$bstatus1 = mysqli_real_escape_string($con,$bstatus1);

        $query = "UPDATE buses SET busno='$busno1',busname='$busname1',drivername='$drivername1',start_station='$start_station1',end_station='$end_station1',routeno='$routeno1', atiming='$atiming1',dtiming='$dtiming1', bstatus='$bstatus1' WHERE busno=$busno1";
        $result = mysqli_query($con, $query);
        if($result){
            echo "<div class='form'><h3>Information updated successfully.</h3><br/>Click here to <a href='buses_table_1.php'>View buses table</a></div>";

    	}
    }else{

?>

<div class="menu">
            <div class="p-3 mb-2 bg-info text-white" id="heading1">
                <h2><a class="text-white" href="manager_index.php">BUS DISPATCH AND INFORMATION SYSTEM FOR ERODE BUS TERMINAL</a></h2>
                <!--<small class="text-muted">Welcome to our homepage</small>-->
            </div>
			
			<?php echo '<center><div class="alert alert-success mt-3" role="alert">
dispatcher LOGGED IN
  </center></button>
</div>' ?>  
		<div class="ml-3">
			<ul class="nav nav-pills">
			 
			  <li class="nav-item">
                              <a class="nav-link active" href="buses_table_1.php">Buses table</a>
			  </li>
			  
			  <div class="navbar-nav ml-auto mr-3">
                              <a class="btn btn-danger" href="home.php" role="button">Logout</a>
			  </div>
			</ul>
		</div>
	</div>

	</div>

<div class="form">
<h3>Update information for bus number = <?php $res = mysqli_query($con,"SELECT * FROM buses where busno=$busno");
							$row = mysqli_fetch_array($res);
							echo $row['busno']; ?>
</h3>
<form name="update" action="" method="post">
<input type="text" name="busno1" placeholder="busno" value="<?php echo $row['busno']; ?>" required />
<input type="text" name="busname1" placeholder="bus name" value="<?php echo $row['busname']; ?>" required />
<input type="text" name="drivername1" placeholder="driver name " value="<?php echo $row['drivername']; ?>" required />
<input type="text" name="start_station1" placeholder="New start station" value="<?php echo $row['start_station']; ?>" required />
<input type="text" name="end_station1" placeholder="New end station" value="<?php echo $row['end_station']; ?>" required />
<input type="text" name="routeno1" placeholder="New route number" value="<?php echo $row['routeno']; ?>" required />
<input type="text" name="atiming1" placeholder="arrivel timing" value="<?php echo $row['atiming']; ?>" required />
<input type="text" name="dtiming1" placeholder="dispatcher timing" value="<?php echo $row['dtiming']; ?>" required />
<br>
<label class="font-weight-bold mt-2">Bus Status :</label> <br>
<?php $bstatus1 = $row['bstatus']; ?>
<input type="radio" id="i1" name="bstatus1" value="On time" <?php if ($bstatus1 == 'On time') echo 'checked="checked"'; ?>" />
<label class="text-success" for="i1">On time</label>
<input type="radio" id="i2" class="ml-3" name="bstatus1" value="arrived" <?php if ($bstatus1 == 'arrived') echo 'checked="checked"'; ?>" />
<label class="text-danger" for="i2">arrived </label>
<input type="radio" id="i2" class="ml-3" name="bstatus1" value="Cancelled" <?php if ($bstatus1 == 'Cancelled') echo 'checked="checked"'; ?>" />
<label class="text-danger" for="i2"> Cancelled </label>
<br>
<button type="submit" class="btn btn-primary mt-3">Update</button>
<a class="btn btn-outline-danger ml-2 mt-3" href="buses_table.php" role="button">Cancel</a>
</form>
<br />
<br /><br />

</div>
<?php } ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/3bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>