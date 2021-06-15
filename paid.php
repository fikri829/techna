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

$sql = "UPDATE appointment SET status='paid' WHERE user_name='".$name_session."'";

if ($conn->query($sql)){
echo "<center><p>YOU HAVE PAID SUCCESFULLY</p><a href='./welcome.php'>CLICK HERE TO GO BACK TO DASHBOARD</a></center>";
}

else {
echo "Error: ".$sql."<br>". $conn->error;
}
$conn->close();

    }
?>
</body>
</html>