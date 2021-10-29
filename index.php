<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="innerheader">
	<h2>List Of Donors</h2>
    <?php  if (isset($_SESSION['username'])) { ?>
      <p style="color:white;margin-left:60%">Welcome <strong><?php echo $_SESSION['username']; ?> ,</strong>
        <a href="index.php?logout='1'" style="color:white;" >Logout</a>
      </p>
      
    <?php } ?>
 
</div>
<div class="inner-content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])){ ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php } ?>

    <!-- logged in user information -->
  

<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
<table>
  <tr>
    <th>Name</th>
    <th>Email</th>
    <th>Phone No</th>
    <th>Donation</th>
    <th>Address</th>
  </tr>
  <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "registration";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 

        $sql = "SELECT * FROM notify";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
           while($row = $result->fetch_assoc()) {

    ?>
  <tr>
          <td><?php echo $row["name"] ;?></td>
          <td><?php echo $row["email"] ;?></td>
          <td><?php echo $row["phone_no"] ;?></td>
          <td><?php echo $row["donation"] ;?></td>
          <td><?php echo $row["address"] ;?></td>
  </tr>
  <?php }}?>
  
</table>

</div>

		
</body>
