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



if (isset($_REQUEST['fname'])){
    
                $fname = stripslashes($_REQUEST['fname']);
		$fname = mysqli_real_escape_string($con,$fname);
                
                $busno = stripslashes($_REQUEST['busno']);
		$busno = mysqli_real_escape_string($con,$busno);
                 $busname = stripslashes($_REQUEST['busname']);
		$busname = mysqli_real_escape_string($con,$busname);
                $drivername = stripslashes($_REQUEST['drivername']);
		$drivername = mysqli_real_escape_string($con,$drivername);
		$start_station = stripslashes($_REQUEST['start_station']);
		$start_station = mysqli_real_escape_string($con,$start_station);
		$end_station = stripslashes($_REQUEST['end_station']);
		$end_station = mysqli_real_escape_string($con,$end_station);
		$routeno = stripslashes($_REQUEST['routeno']);
		$routeno = mysqli_real_escape_string($con,$routeno);
                $atiming = stripslashes($_REQUEST['atiming']);
		$atiming = mysqli_real_escape_string($con,$atiming);
		$dtiming = stripslashes($_REQUEST['dtiming']);
		$dtiming = mysqli_real_escape_string($con,$dtiming);
		$bstatus = stripslashes($_REQUEST['bstatus']);
		$bstatus = mysqli_real_escape_string($con,$bstatus);

        $query = "UPDATE fbuses SET fname='$fname',busno='$busno',busname='$busname',drivername='$drivername',start_station='$start_station',end_station='$end_station',routeno='$routeno', atiming='$atiming',dtiming='$dtiming', bstatus='$bstatus' WHERE busno=$busno";
        $result = mysqli_query($con, $query);
        if($result){
            echo "<div class='form'><h3>Information updated successfully.</h3><br/>Click here to <a href='Festivelbuses_table_1.php'>View buses table</a></div>";

    	}
    }else{

?>

<div class="menu">
            <div class="p-3 mb-2 bg-info text-white" id="heading1">
                <h2><a class="text-white" href="manager_index.php">BUS DISPATCH AND INFORMATION SYSTEM FOR ERODE BUS TERMINAL</a></h2>
                <!--<small class="text-muted">Welcome to our homepage</small>-->
            </div>
			
			<?php echo '<center><div class="alert alert-success mt-3" role="alert">
  admin LOGGED IN
  </center></button>
</div>' ?>  
		<div class="ml-3">
			<ul class="nav nav-pills">
			  
			  <li class="nav-item">
                              <a class="nav-link active" href="Festivelbuses_table_1.php">Buses table</a>
			  </li>
			  
			  <div class="navbar-nav ml-auto mr-3">
			  	<a class="btn btn-danger" href="manager_logout.php" role="button">Logout</a>
			  </div>
			</ul>
		</div>
	</div>

	</div>

<div class="form">
<h3>Update information for bus number = <?php $res = mysqli_query($con,"SELECT * FROM fbuses where busno=$busno");
							$row = mysqli_fetch_array($res);
							echo $row['busno']; ?>
</h3>
<form name="update_bus" action="" method="post">
<input type="text" name="fname" placeholder="festival name" value="<?php echo $row['fname']; ?>" required />
<input type="text" name="busno" placeholder="busno" value="<?php echo $row['busno']; ?>" required />
<input type="text" name="busname" placeholder="bus name" value="<?php echo $row['busname']; ?>" required />
<input type="text" name="drivername" placeholder="driver name " value="<?php echo $row['drivername']; ?>" required />
<input type="text" name="start_station" placeholder="New start station" value="<?php echo $row['start_station']; ?>" required />
<input type="text" name="end_station" placeholder="New end station" value="<?php echo $row['end_station']; ?>" required />
<input type="text" name="routeno" placeholder="New route number" value="<?php echo $row['routeno']; ?>" required />
<input type="text" name="atiming" placeholder="arrivel timing" value="<?php echo $row['atiming']; ?>" required />
<input type="text" name="dtiming" placeholder="dispatcher timing" value="<?php echo $row['dtiming']; ?>" required />
<br>
<label class="font-weight-bold mt-2">Bus Status :</label> <br>
<?php $bstatus = $row['bstatus']; ?>
<input type="radio" id="i1" name="bstatus" value="On time" <?php if ($bstatus == 'On time') echo 'checked="checked"'; ?>" />
<label class="text-success" for="i1">On time</label>
<input type="radio" id="i2" class="ml-3" name="bstatus" value="arrived" <?php if ($bstatus == 'arrived') echo 'checked="checked"'; ?>" />
<label class="text-danger" for="i2">arrived </label>
<input type="radio" id="i2" class="ml-3" name="bstatus" value="Cancelled" <?php if ($bstatus == 'Cancelled') echo 'checked="checked"'; ?>" />
<label class="text-danger" for="i2">Cancelled </label>
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
