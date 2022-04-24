<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Users table</title>
<link rel="stylesheet" href="css/style2.css" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="<script src="js/bootstrap.min.js"></script></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>

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
                              <a class="nav-link active" href="dispatcherindex.php">dispatcher </a>
			  </li>
                          
			   <li class="nav-item">
                              <a class="nav-link active" href="buses_table_1.php">Ordinary Buses </a>
			  </li>
                          
                          <li class="nav-item">
                              <a class="nav-link active" href="Festivelbuses_table_1.php">Special Buses </a>
			  </li>
			  <div class="navbar-nav ml-auto mr-3">
			  	<a class="btn btn-danger" href="home.php" role="button">Logout</a>
			  </div>
			</ul>
		</div>
	</div>
<br>
</html>
<?php

require('db.php');
include("auth.php");


$result = mysqli_query($con,"SELECT * FROM buses");

echo "<table class='table table-hover ml-2 '>
<caption>Buses table</caption>
<tr>

<th>BUS NO</th>
<th>BUS NAME</th>
<th>DRIVER NAME</th>
<th>START STATION</th>
<th>END STATION</th>
<th>ROUTE NO.</th>
<th>ARRIVAL TIMING</th>
<th>DEPATURE TIMING</th>
<th>Status</th>
<th>Action</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";

echo "<td>" . $row['busno'] . "</td>";
echo "<td>" . $row['busname'] . "</td>";
echo "<td>" . $row['drivername'] . "</td>";
echo "<td>" . $row['start_station'] . "</td>";
echo "<td>" . $row['end_station'] . "</td>";
echo "<td>" . $row['routeno'] . "</td>";
echo "<td>" . $row['atiming'] . "</td>";
echo "<td>" . $row['dtiming'] . "</td>";
echo "<td>" . $row['bstatus'] . "</td>";
echo "<td><a href='update_1.php?busno=".$row['busno']."'><button type='button' class='btn btn-warning'>Update</button></a>
	<a onClick=\"javascript: return confirm('Please confirm deletion');\" href='delete_bus1.php?busno=".$row['busno']."'></a></td>";

$bstatus =  $row['bstatus'];
if ($bstatus == 'On time') {
    	echo "<td class='text-success font-weight-bold'>" . $bstatus . "</td>";
}

if ($bstatus == 'Cancelled') {
    	echo "<td class='text-danger font-weight-bold'>" . $bstatus . "</td>"; 
}
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
