<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bus Dispatch and Information System</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/css/simple-sidebar.css" rel="stylesheet">
	
    <!-- SignIn CSS -->
	<link href="css/css/signin.css" rel="stylesheet" type="text/css">

</head>

<body>

      

<div class="account-container register">
	
	<div class="content clearfix">
		<h1>Enter Bus Details</h1>
		<form action="add_bus_info.php" method="post">
						
                    </br>
			<div class="login-fields">
				
				<p>Create bus information:</p>
				
				<div class="field">
                                           </br>
                                           
					<label for="bus_name">Bus Name:</label>
					<input type="text" id="bus_name" name="bus_name" value="" placeholder="Bus Name" class="login" required />
				</div> 
                                
                                <div class="field">
					<label for="bus_number">Bus Number:</label>
					<input type="text" id="bus_number" name="bus_number" value="" placeholder="Bus Number" class="login" required />
				</div> 
                                
                                <div class="field">
					<label for="driver_name">Driver Name:</label>
					<input type="text" id="driver_name" name="driver_name" value="" placeholder="Driver Name" class="login" required />
				</div> 
                                
                                
                                <div class="field">
					<label for="from_place">Starting Place:</label>
					<input type="text" id="from_place" name="from_place" value="" placeholder="Starting Place" class="login" required />
				</div> 
                                <div class="field">
					<label for="destination_place">Destination Place:</label>
					<input type="text" id="destination_place" name="destination_place" value="" placeholder="Destination Place" class="login" required />
				</div> 
                                
                                
                                <div class="field">
			
                                <label for="appt">arrival  time:</label>
                              <input type="time" id="appt" name="appt">
                                
                                </div> 
                                <div class="field">
			
                                <label for="eppt">departure time a time:</label>
                              <input type="time" id="eppt" name="eppt">
                                
                                </div> 
                                
                                
                                
				<div class="field">
				<label for="Bus Status">Bus Status</label>
				<select name="bus_status" class="login" style="font-family: 'Open Sans'; font-size: 13px; color: #8e8d8d; background-color: #fdfdfd; width: 297px; display: block; height: 40px; margin: 0; box-shadow: inset 2px 2px 4px #f1f1f1;">
				<option value="ontravel">On_travel</option>
				<option value="cancelled">cancelled</option>
                                <option value="Arrived">Arrived</option>
				
				</select>
				</div> <!-- /field -->
				
			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				<button type="submit" name="save" class="button btn btn-primary btn-large">Register</button>
				<a href="bus.php"><button type="button" style="margin-right:20px;" class="button btn btn-primary btn-large">Cancel</button></a>
			</div> 
			<!-- .actions -->
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->


<script src="js/js/jquery-1.7.2.min.js"></script>
<script src="js/js/bootstrap.js"></script>
               
<script src="js/js/signin.js"></script>
