<html>
<head>
</head>
<body>
<?php
include('session.php');

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "techna";

//Connect to database

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}

else {

$sql = "SELECT status FROM appointment WHERE user_name='".$name_session."' AND status='paid'";
$result = mysqli_query($conn,$sql) or die( mysqli_error($conn));
$row = mysqli_fetch_row($result);

$count = mysqli_num_rows($result);

    if($count == 1 ) {
 echo "<p>YOU HAVE NOTHING TO PAID LEFT</p><a href='./welcome.php'>CLICK HERE TO GO BACK TO DASHBOARD</a>";	  
        }
    
    else {
      header("location: invoice.php");
      }
   }
    
$conn->close();

?>
</body>
</html>