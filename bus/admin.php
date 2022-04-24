
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

</body>
