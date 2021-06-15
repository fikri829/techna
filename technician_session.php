<?php
   include('technician_connection.php');
    session_id("session2");
   session_start();
   
   $user_check = $_SESSION['login_user'];
   $long_check = $_SESSION['long'];
   $lat_check = $_SESSION['lat'];

   $ses_sql = mysqli_query($conn,"select * from techniciantechna where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   $id_session = $row['id'];
   $name_session = $row['technician_name'];

   if(!isset($_SESSION['login_user'])){
      header("location:technician_login.php");
      die();
   }
?>