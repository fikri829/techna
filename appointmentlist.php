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
    background-color: #8E1600;
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

<center><h1 style="font-family: Raleway; color: white;">Appointment List</h1>
        <table class="styled-table">
            <tr class='active-row'>
            <td>Client's Name</td>
            <td>Issues</td>    
            <td>Date<br>Appoint</td>
            <td>Time<br>Appoint</td>
            <td >Status</td>
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

$sqlfind = "SELECT * FROM appointment WHERE technician_name='$name_session'";
$result = mysqli_query($conn,$sqlfind) or die( mysqli_error($conn));
$row1 = mysqli_fetch_field($result);
if (!empty($result) && $result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row['user_name'].  "</td><td>" .$row['issue']. "</td><td>" . $row['date'] . " </td><td>" . $row['time'] ."</td>";

      if($row['status'] == 'unpaid'){
          echo "<td style='color:#FCD12A;float:right;margin-right:10px;font-size:20px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.30); background-color:grey;'>".$row['status']."</td></tr>";
      }
      else if($row['status'] == 'paid'){
          echo "<td style='color:lightgreen;float:right;margin-right:10px;box-shadow: 0 0 20px rgba(0, 0, 0, 0.30); background-color:grey;'>".$row['status']. "<a target='_top' href='./success!.html'>&nbspClick Here!</a></td></tr>";
      }
  }
    echo "</table>";
} else {
  echo "<tr><td>No request yet.</td></tr>";
}
$conn->close();
?>
</center>
</section>
</body>
   
</html>