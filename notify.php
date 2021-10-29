<?php
session_start();
// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'registration');

  $username = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $phone_no = mysqli_real_escape_string($db, $_POST['phone_no']);
  $donation = mysqli_real_escape_string($db, $_POST['donation']);
  $address = mysqli_real_escape_string($db, $_POST['address']);

  $user_check_query = "insert into notify(name , email , phone_no , donation , address ) values('$username' , '$email' , '$phone_no' , '$donation' , '$address' )";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  	header('location: welcome.php');

     // $query = "SELECT * FROM notify";
    //$results = mysqli_query($db, $query);
    //$resultset = mysqli_fetch_assoc($results);
   // while($row =mysqli_fetch_assoc($results))
    //{
    // if($result = mysqli_query($link, $sql)){
    // if(mysqli_num_rows($result) > 0){
    //     echo "<table>";
    //         echo "<tr>";
    //             echo "<th>id</th>";
    //             echo "<th>first_name</th>";
    //             echo "<th>last_name</th>";
    //             echo "<th>email</th>";
    //         echo "</tr>";
    //     while($row = mysqli_fetch_array($result)){
    //         echo "<tr>";
    //             echo "<td>" . $row['id'] . "</td>";
    //             echo "<td>" . $row['first_name'] . "</td>";
    //             echo "<td>" . $row['last_name'] . "</td>";
    //             echo "<td>" . $row['email'] . "</td>";
    //         echo "</tr>";
    //     }
    //     echo "</table>";
      

    //print"<pre>";print_r($row);
  //}

?>