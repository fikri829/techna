<?php
   include('technician_session.php');
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<!DOCTYPE html>
<html lang="en">
<head>
<style>
    body {
        background-color: darkslategray;
    }
.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: Raleway;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
    .styled-table thead tr {
    background-color: blueviolet;
    color: #ffffff;
    text-align: left;
}
    .styled-table th,
.styled-table td {
    padding: 12px 15px;
}
    .styled-table tbody tr {
    border-bottom: 0px solid #009879;
}

.styled-table tbody tr:nth-last-of-type(even){
    background-color: #f3f3f3;
}
.styled-table tbody tr:nth-last-of-type(odd){
    background-color: #c4c4c4;
}
.styled-table tbody tr:last-of-type {
    border-bottom: 0px solid #009879;
}
    .styled-table tbody tr.active-row {
    background-color: #3737b2;
    font-weight: bold;
    color: white;
}
    a {
        text-decoration: underline;
        color :white;
    }
    a:hover {
        color: red;
    }
</style>
</head>
   <body>
  <!--THE CONTENT-->
<center><h1 style="font-family: Raleway; color: white;">Client's Request</h1>

        <table class="styled-table">
            <tr>
            <td>Customer's Name</td>
            <td>Location</td>
            <td>Distance</td>    
            <td>Date Appoint</td>
            <td>Time Appoint</td>
                  <td>Issue</td>
                <td>Verification</td>
            </tr>
<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "techna";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if ($conn -> connect_error){
    die ("Connection failed:". $conn-> connect_error);
}
//Distance Check
$sqlfind1 = "SELECT * FROM requestrepair WHERE status = 'pending'";
$result1 = mysqli_query($conn,$sqlfind1) or die( mysqli_error($conn));
$row1 = mysqli_fetch_field($result1);
      //THE DISTANCE FUNCTION
function distance($lat1, $lon1, $lat2, $lon2, $unit) {
  if (($lat1 == $lat2) && ($lon1 == $lon2)) {
    return 0;
  }
  else {
    $theta = $lon1 - $lon2;
    $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
    $dist = acos($dist);
    $dist = rad2deg($dist);
    $miles = $dist * 60 * 1.1515;
    $unit = strtoupper($unit);

    if ($unit == "K") {
      return (round($miles * 1.609344, 2));
    } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
      return $miles+100000;
    }
  }
}
if (!empty($result1) && $result1->num_rows > 0) {
    
    while($row1 = $result1->fetch_assoc()) {
$lalala = distance($lat_check, $long_check, $row1['latitude'], $row1['longitude'], "K");
if ($lalala < 5){
    echo "<tr><td value='".$row1['user_name']."'>" .$row1['user_name']. "</td><td>".$row1['address']. "</td><td>" .$lalala. "km</td><td>" .$row1['date_appointment']. "</td><td>" . $row1['time_appointment'] . " </td><td>" . $row1['issues'].  "</td>";
      if($row1['status']='pending'){
          echo "<td><a href='./technician_display.php?name=".$row1['user_name']."';'>APPROVE</a></td></tr>";
      }
      else
          echo "<td style='color:green;float:right;margin-right:10px;'>".$row1['status']."</td></tr>";
  }        else {
            echo "<td>No Request Yet</td></tr>";
    echo $lalala;
        }
    echo "</table>";
    }
}

else {
    echo "<tr><td>No request nearby yet!</td></tr>";
}
            
$conn->close();
?></table></center>
</body>
   
</html>