<?php

?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Add special bus</title>
<link rel="stylesheet" href="css/style2.css" />
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="<script src="js/bootstrap.min.js"></script></script>
<script src="<script src="js/bootstrap.js"></script></script>
<script src="js/jquery-3.4.1.min.js"></script>
</head>
<body>
<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['busno'])){
		$busno = stripslashes($_REQUEST['busno']); // removes backslashes
		$busno = mysqli_real_escape_string($con,$busno); 

                $fname = stripslashes($_REQUEST['fname']); // removes backslashes
		$fname = mysqli_real_escape_string($con,$fname); 
//escapes special characters in a string
		$busname = stripslashes($_REQUEST['busname']); // removes backslashes
		$busname = mysqli_real_escape_string($con,$busname);
                
                $drivername = stripslashes($_REQUEST['drivername']); // removes backslashes
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
                
                $bstatus= stripslashes($_REQUEST['bstatus']);
		$bstatus = mysqli_real_escape_string($con,$bstatus);
                
               // $bstatus= stripcslashes($)
        $query = "INSERT into `fbuses` (fname,busno, busname,drivername,start_station, end_station, routeno, atiming,dtiming,bstatus) VALUES ('$fname','$busno','$busname','$drivername', '$start_station', '$end_station', '$routeno', '$atiming','$dtiming','$bstatus')";
        $result = mysqli_query($con, $query);
        if($result){
            echo "<div class='form'><h3>Bus information successfully added.</h3><br/>Click here to view <a href='Festivelbuses_table.php'>Buses table</a></div>";

    	}
    }else{

?>

<div class="menu">
            <div class="p-3 mb-2 bg-info text-white" id="heading1">
                <h2><a class="text-white" href="manager_index.php">BUS DISPATCH AND INFORMATION SYSTEM FOR ERODE BUS TERMINAL</a></h2>
                <!--<small class="text-muted">Welcome to our homepage</small>-->
            </div>
			
			<!--
			<div>
				<ul class="nav nav-tabs">
					<li class="nav-item">
					<a class="nav-link" href="home.php">Home</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="login.php">Login</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="registration.php">Register</a>
					</li>
					<li class="nav-item">
					<a class="nav-link" href="contact.php">Contact Us</a>
					</li>
                    <li class="nav-item">
                    <a class="nav-link" href="index.php">My Account</a>
                    </li>
                    <div class="navbar-nav ml-auto mr-3">
                    <div class="dropdown">
                      <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Manager
                      </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="manager_login">Login</a>
                        <a class="dropdown-item" href="manager_reg">Registration</a>
                      </div>
                    </div>
                </div>
				</ul>
				<br>
			</div>
		-->
	</div>

<?php echo '<center><div class="alert alert-success mt-3" role="alert">
  ADMIN LOGGED IN
  </center></button>
</div>' ?>

<div class="ml-3">
			<ul class="nav nav-pills">
			  <li class="nav-item">
			    <a class="nav-link" href="manager_index.php">Admin panel</a>
			  </li>
			  <li class="nav-item">
                              <a class="nav-link active" href="add_bus_2.php">Add new bus</a>
			  </li>
                          <li class="nav-item">
                              <a class="nav-link active" href="additional_bus.php">Additional bus</a>
			  </li>
			  <li class="nav-item">
                              <a class="nav-link" href="Festivelbuses_table.php">Buses table</a>
			  </li>
			  
			  <div class="navbar-nav ml-auto mr-3">
                              <a class="btn btn-danger" href="home.php" role="button">Logout</a>
			  </div>
			</ul>
		</div>
	</div>
<br>

<div class="form">
<h1>Add Special Bus</h1>
<form name="add_new_bus" action="" method="post">
    <input type="text" name="fname" placeholder="festival name" required />
<input type="text" name="busno" placeholder="Bus number" required />
<input type="text" name="busname" placeholder="Bus name" required />
<input type="text" name="drivername" placeholder="driver name" required />
<input type="text" name="start_station" placeholder="Start station" required />
<input type="text" name="end_station" placeholder="End station" required />
<input type="text" name="routeno" placeholder="Route number" required />
<input type="text" name="atiming" placeholder="Arrival Timing" required /><br>
<input type="text" name="dtiming" placeholder="Dispatcher Timing" required /><br><br>
<select name="bstatus" placeholder="Bus status" required>
                                <option value="status">bus status</option>
				<option value="ontravel">On_travel</option>
				<option value="cancelled">cancelled</option>
                                <option value="Arrived">Arrived</option>
				
				</select><br><br>
<button type="submit" class="btn btn-primary">Add Bus</button>
<a class="btn btn-outline-primary ml-1" href="Festivelbuses_table.php" role="button">View Buses Table</a><br /><br />
</form> 
</div>
<?php } ?>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>
