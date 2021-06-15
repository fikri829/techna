<html>
<head>
</head>
<body>
<?php
include('session.php');
if($_SERVER["REQUEST_METHOD"] == "POST") {
$address = filter_input(INPUT_POST, 'address');
$checkbox1=$_POST['issues'];  
$chk="";  
foreach($checkbox1 as $chk1)  
   {  
      $chk .= $chk1.",";  
   }  
$date = filter_input(INPUT_POST, 'date');
$time = filter_input(INPUT_POST, 'time');
$lat = filter_input(INPUT_POST, 'lat');
$long = filter_input(INPUT_POST, 'long');
}
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

$sql = "INSERT INTO requestrepair (user_name,issues,date_appointment,time_appointment,address,longitude,latitude, status)
values ('$name_session','$chk','$date','$time','$address','$long','$lat','pending')";
if ($conn->query($sql)){
echo "Data have been added!";
header("Location: success!.html");
}
else {
echo "Error: ".$sql."<br>". $conn->error;

}
$conn->close();
}

?>
</body>
</html>