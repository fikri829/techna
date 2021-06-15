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

<center><h1 style="font-family: Raleway; color: white;">Request Hardware</h1>
<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "techna";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if ($conn -> connect_error){
    die ("Connection failed:". $conn-> connect_error);
}
            else{
       $id=1;
    echo "<p style='color: white; font-family:Raleway'>Select which hardware needed to request and enter the name pf the requested client.s.</p>
    
   <table id='tablehardware' class='styled-table'>
       <tr class='active-row'>
            <td>Model Name</td>
            <td>Hardware Type</td>
            <td>Hardware Specs</td>
           <td>Cost</td>
           <td>Option</td>
           <td></td>
            </tr>";
    $sqlfind5 = "SELECT * FROM hardwarelist";
      $resilt = mysqli_query($conn,$sqlfind5) or die( mysqli_error($conn));
      $row8 = mysqli_fetch_field($resilt);
      while ($row8 = $resilt->fetch_assoc()){
      echo "<tr><td id='hardwarename".$id."'>". $row8['hardware_name']. "</td><td >".$row8['hardware_type']."</td><td>".$row8['hardware_specs']. "</td><td id='hardwarecost".$id."'>". $row8['hardware_cost_show']. "</td><td><input type ='checkbox' name='button".$id."'><label>Request</label></button></td><td><input type='hidden' id='costval".$id."' value=".$row8['hardware_cost_value']."></td></tr>";
          $id=$id+1;
    }
    echo "</table>";   
}

$conn->close();
?>
            <center><button id='tek' onclick='techrecommend()'>Submit Request</button></center>
</center>
</body>
   
</html>