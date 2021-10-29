<?php
session_start();
$db = mysqli_connect('localhost', 'root', '', 'registration');
//print_r($_POST);die;
$username = "";
$email    = "";
$errors = array(); 

if (isset($_POST['login_user'])) {
  //print_r($_POST);die;
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
    array_push($errors, "Username is required");
  }
  if (empty($password)) {
    array_push($errors, "Password is required");
  }  
  if (count($errors) == 0) {
    $password =$password;
    $query = "SELECT * FROM users WHERE name='$username' AND password='$password'";
    $results = mysqli_query($db, $query);
    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now logged in";
      header('location: index.php');
    }else {
      array_push($errors, "Wrong username/password combination");
    }
  }
}

?>