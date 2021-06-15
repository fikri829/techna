<?php
include("technician_connection.php");
session_id("session2");
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$sql = "SELECT * FROM admin WHERE username = '$username' and password = '$password'";
$result = mysqli_query($conn,$sql) or die( mysqli_error($conn));
$row = mysqli_fetch_row($result);

$count = mysqli_num_rows($result);

    if($count == 1 ) {
        print_r ($row);
        $logged_in_user = mysqli_fetch_assoc($result);
 
        $_SESSION['login_user'] = $username;

        
        header("location: admin_welcome.php");	  
        }
    
    else {
         $error = "Your Login Name or Password or Status is invalid";
        echo $error;
      }
   }

?>