<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: technician_login.html");
   }
?>