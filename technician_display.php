<html>
<head>
</head>
<body>
<?php
include('technician_session.php');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "techna";

//Connect to database

$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$username = $_GET['name'];
if (mysqli_connect_error()){
    die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
}

else {
$sql3 = "SELECT * FROM requestrepair WHERE user_name = '$username'";
$result = mysqli_query($conn,$sql3) or die( mysqli_error($conn));
$row = mysqli_fetch_row($result);

if ($result->num_rows > 0) {
$issue = $row['1'];
$date= $row['2'];
$time = $row['3'];
$long = $row['5'];
$lat = $row['6'];
$sql2 = "INSERT INTO appointment (user_name,technician_name, issue,date,time,longitude,latitude,status)
values ('$username', '$name_session', '$issue','$date','$time', '$long','$lat','unpaid')";

if ($conn->query($sql2)){
echo "Data have been added!";
}
else {
echo "Error: ".$sql2."<br>". $conn->error;

}
}
}
$sql4 = "SELECT status FROM requestrepair WHERE user_name = '$username'";
$result = mysqli_query($conn,$sql4) or die( mysqli_error($conn));
$row = mysqli_fetch_row($result);
    if ($result->num_rows > 0) {
    $sql = "UPDATE requestrepair SET status='approved!'";

if ($conn->query($sql) === TRUE) {
    header("Location: success_technician.html");
} else {
  echo "Error updating record: " . $conn->error;
}}
$conn->close();

    ?>
    </body>
</html>
