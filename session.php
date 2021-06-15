<?php
   include('connection.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select * from usertechna where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   $id_session = $row['id'];
   $name_session = $row['fullname'];

   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>