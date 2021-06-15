<?php
include("technician_connection.php");
session_id("session2");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$lat = filter_input(INPUT_POST, 'lat');
$long = filter_input(INPUT_POST, 'long');
$sql = "SELECT * FROM techniciantechna WHERE username = '$username' and password = '$password'";
$result = mysqli_query($conn,$sql) or die( mysqli_error($conn));
$row = mysqli_fetch_row($result);

$count = mysqli_num_rows($result);

    if($count == 1 ) {
        print_r ($row);
        $logged_in_user = mysqli_fetch_assoc($result);
 
        $_SESSION['login_user'] = $username;
        $_SESSION['long'] = $long;
        $_SESSION['lat'] = $lat;
        
        header("location: technician_welcome.php");	  
        }
    
    else {
         $error = "Your Login Name or Password or Status is invalid";
        echo $error;
      }
   }

?>