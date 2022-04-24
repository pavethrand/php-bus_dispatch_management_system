<?php


include("auth.php"); 

?>
<!DOCTYPE html>

<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    </head>











<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

.navbar {
  overflow: hidden;
  background-color: #138; 
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.subnav {
  float: left;
  overflow: hidden;
}

.subnav .subnavbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .subnav:hover .subnavbtn {
  background-color: blue;
}

.subnav-content {
  display: none;
  position: absolute;
  left: 0;
  background-color: green;
  width: 100%;
  z-index: 1;
}

.subnav-content a {
  float: left;
  color: white;
  text-decoration: none;
}

.subnav-content a:hover {
  background-color: #eee;
  color: black;
}

.subnav:hover .subnav-content {
  display: block;
}
</style>
</head>
<body>

<div class="navbar">
  <a href="#home">HOME</a>
  <div class="subnav">
    <button class="subnavbtn">BUS DETAILS <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
        <a href="add_bus_2.php">ADD BUS</a>
      <a href="#team">SPECIAL BUS</a>
      <a href="#careers">MODIFICATION </a>
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">DISPATCHER <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#bring">ADD DISPATCHER </a>
      <a href="#deliver">CHANGE DISPATCHER</a>
   
    </div>
  </div> 
  <div class="subnav">
    <button class="subnavbtn">STATUS <i class="fa fa-caret-down"></i></button>
    <div class="subnav-content">
      <a href="#link1">Link 1</a>
      
    </div>
  </div>
 
</div>

<div style="padding:0 16px">
  
    
    </br>
    </br>
    </br>
 <p>Welcome <?php echo $_SESSION['username'];?>!</p>
    
</div>

    <?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_REQUEST['busno'])){
		$busno = stripslashes($_REQUEST['busno']); // removes backslashes
		$busno = mysqli_real_escape_string($con,$busno); //escapes special characters in a string
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
        $query = "INSERT into `buses` (busno, busname,drivername,start_station, end_station, routeno, atiming,dtiming,bstatus) VALUES ('$busno','$busname','$drivername', '$start_station', '$end_station', '$routeno', '$atiming','$dtiming','$bstatus')";
        $result = mysqli_query($con, $query);
        if($result){
            echo "<div class='form'><h3>Bus information successfully added.</h3><br/>Click here to view <a href='buses_table.php'>Buses table</a></div>";

    	}
    }else{

?>
    <?php echo '<center><div class="alert alert-success mt-3" role="alert">
  ADMIN LOGGED IN
  </center></button>
</div>' ?>
    <div class="form">
<h1>Add New Bus</h1>
<form name="add_new_bus" action="" method="post">
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
<a class="btn btn-outline-primary ml-1" href="buses_table.php" role="button">View Buses Table</a><br /><br />
</form> 
</div>
<?php } ?>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

    
    
    
    
</body>
