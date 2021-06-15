<?php
   include('session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/main.css">
    <script>
    function showPositions() {
        navigator.geolocation.getCurrentPosition(showMap);
    }
    
    function showMap(position) {
        // Get location data
        var latlong = position.coords.latitude + "," + position.coords.longitude;
        
        // Set Google map source url
        var mapLink = "https://maps.googleapis.com/maps/api/staticmap?center="+latlong+"&zoom=16&size=400x300&output=embed";
        
        // Create and insert Google map
        document.getElementById("embedMap").innerHTML = "<img alt='Map Holder' src='"+ mapLink +"'>";
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCY2buDtbYIot8Llm_FkQXHW36f0Cme6TI&callback=myMap"></script>
    <title>Welcome</title>
</head>
   <body>
  <!--THE TOP SECTION-->
    </section>
  <!--THE CONTENT-->
       <div style="text-align: center;">
       <h1>HELLO!</h1>
           </div>
         <div id="embedMap" style=" margin-top: 10px; margin-bottom: 10px;display: flex; justify-content: center;">
<section class="MiddleSection2">
    <form class="lalala" style="margin-top: 0;" action="./display.php" method="POST">
   <label for="address" style="font-size: 2em;">
        Address: </label>
                &nbsp;&nbsp;
        <input type="text" name="address" style="width: 100%;" required>
                &nbsp;&nbsp;
   <button type="button" onclick="showPositions()">Search</button>
        &nbsp;&nbsp;
          <label for="address" style="font-size: 2em;">
        OR</label>
                &nbsp;&nbsp;
 <button type="button" onclick="getLocations()" style="font-size: 15px;" required>Show My Current Location</button>
        <div id="demo"></div>
</section>
<section class="MiddleSection2">
        <div class="lalala" style="font-size: 2em;">
        <label for="issues">Laptop Issues:</label>
            &nbsp;
        <select name="issues"  multiple required>
  <option value="Hardware Issues">Hardware Issues</option>
  <option value="Software Issues">Software Issues</option>
  <option value="Cleaning Service">Cleaning Service</option>
  <option value="Upgrade Service">Upgrade Service</option>
</select>
        &nbsp;&nbsp;
        <label for="date">Date Of Appointment:</label>
            &nbsp;
        <input type="date" name="date" required>
             &nbsp;&nbsp;
        <label for="time">Time Of Appointment:</label>
            &nbsp;
        <input type="time" name="time" required>
            &nbsp;&nbsp;
<input type="submit" name="submit" value="submit">

        </div>
    </section>
<script>
 var x = document.getElementById("demo");
function getLocations() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
function showPosition(position) {
  x.innerHTML = "<input type='hidden' name='lat' value='" + position.coords.latitude +
  "' required><input type='hidden' name='long' value='" + position.coords.longitude + "' required>";
}
        </script>    
</form>
<section>

 <h2 style="text-align:center;font-size:30px;">Waiting List</h2>
<div style="background-color : #222; font-size : 20px; ">

        <table style="width:100%;">
            <tr>
            <td>Issue</td>
            <td>Date Appoint</td>
            <td>Time Appoint</td>
            <td style="float: right;">Status</td>
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

$sqlfind = "SELECT * FROM requestrepair WHERE user_name='$name_session'";
$result = mysqli_query($conn,$sqlfind) or die( mysqli_error($conn));
$row1 = mysqli_fetch_field($result);
if (!empty($result) && $result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row['issues'].  "</td><td>" .$row['date_appointment']. "</td><td>" . $row['time_appointment'] . " </td>";

      if($row['status'] == 'pending'){
          echo "<td style='color:yellow;float:right;margin-right:10px;'>".$row['status']."</td></tr>";
      }
      else if($row['status'] == 'approved!'){
          echo "<td style='color:green;float:right;margin-right:10px;'>".$row['status']."</td></tr>";
          echo "<tr><td><a href='./appointment.php?name=".$row['user_name']."';'>APPROVE</a></td></tr>";
      }
  }
    echo "</table>";
} else {
  echo "<tr><td>No request yet.</td></tr>";
}
$conn->close();
?>
</section>
</body>
   
</html>