<?php
include('session.php');
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "techna";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if ($conn -> connect_error){
    die ("Connection failed:". $conn-> connect_error);
}
$sql = "SELECT user_name FROM appointment WHERE user_name='$name_session'";
$result = mysqli_query($conn,$sql) or die( mysqli_error($conn));
$row = mysqli_fetch_row($result);
$count = mysqli_num_rows($result);
if ($count ==0) {
   header("Location: welcome.php");
    die();
} else {
    $popo=0;
}

?>
<!doctype html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="chrome=1">
<meta charset="utf-8">
<title>Untitled Page</title>
<meta name="generator" content="WYSIWYG Web Builder 16 - https://www.wysiwygwebbuilder.com">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/Untitled2.css" rel="stylesheet">
<link href="css/Master-Page.css" rel="stylesheet">
<script src="js/jquery-1.12.4.min.js"></script>
<script src="js/jquery-ui.min.js"></script>
<script src="js/wb.carousel.effects.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
<script>
$(document).ready(function()
{
   var Carousel1Opts =
   {
      delay: 3000,
      duration: 500,
      easing: 'linear',
      mode: 'fade',
      direction: '',
      pagination: true,
      pagination_img_default: 'images/Carousel1-default.png',
      pagination_img_active: 'images/Carousel1-active.png',
      pause: null,
      start: 0
   };
   $("#Carousel1").carouseleffects(Carousel1Opts);
   $("#Carousel1_back a").click(function()
   {
      $('#Carousel1').carouseleffects('prev');
   });
   $("#Carousel1_next a").click(function()
   {
      $('#Carousel1').carouseleffects('next');
   });
});
</script>
<style>
.MiddleSection  {
    display: flex;
    justify-content: center;
    width: 100%;
    float: left;
    margin-bottom: 8px;
    height: 92vh;
}

h2.logobuild {
font-family: 'Dead revolution';
font-size: 400%;

}

div.form {
    font-size: px;
    font-weight: bold;
    line-height: 40px;
    padding: 8px 20px;
    color: rgb(255, 255, 255);
    text-decoration: none;
}
</style>

</head>
<body>
<div id="space"><br></div>
<div id="container">

<div id="wb_Shape3" style="position:absolute;left:0px;top:0px;width:1900px;height:1319px;opacity:0.70;z-index:9;">
<img src="images/img0004.png" id="Shape3" alt="" style="width:1900px;height:1319px;"></div>
    
<div id="wb_Carousel1" style="position:absolute;left:0px;top:976px;width:1900px;height:343px;z-index:10;overflow:hidden;">
<div id="Carousel1" style="position:absolute;">
<div class="frame frame-1">
</div>
<div class="frame frame-2" style="display:none">
</div>
<div class="frame frame-3" style="display:none">
</div>
</div>
<div id="Carousel1_back"><a class="carousel-control-prev" role="button"><span class="carousel-control-prev-icon" aria-hidden="true"></span></a></div>
<div id="Carousel1_next"><a class="carousel-control-next" role="button"><span class="carousel-control-next-icon" aria-hidden="true"></span></a></div>
</div>
<div id="wb_ResponsiveMenu1" style="position:absolute;left:0px;top:0px;width:1900px;height:95px;z-index:11;">
<label class="toggle" for="ResponsiveMenu1-submenu" id="ResponsiveMenu1-title">Menu<span id="ResponsiveMenu1-icon"><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span></span></label>
<input type="checkbox" id="ResponsiveMenu1-submenu">
<ul class="ResponsiveMenu1" id="ResponsiveMenu1" role="menu">
<li><span style="font-size : 2em; color:white;"><br>&nbsp;Welcome</span><span id="homewelcome" style="font-size : 2em;">&nbsp;<?php echo "<span style='color:yellow;'>". $login_session; ?></span></li>
<li style="float:right;"><a role="menuitem" href="logout.php" title="Log Out"><i class="fa fa-user fa-2x">&nbsp;</i><br>Log&nbsp;Out</a></li>
<li style="float:right;"><a role="menuitem" href="./welcome.php"><i class="fa fa-user fa-2x">&nbsp;</i><br>Dashboard</a></li>
</ul>
    
<!--CONTENT HERE-->

<style>
    
    button {
  background-color: #3737b2;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}
    
button:hover {
  opacity: 0.4;
}

    .container{
        border-color: yellow;
        border-width: 1px;
        border-style: solid;
        font-size: 18px;
    }
    
    #big-container{
        margin: auto;
        border: 0px solid green;
        padding: 10px;
        display: block;
        align-content: center;
    }
    
    
    #navopt {
        list-style-type: none;
        display: block;
        padding: 0;
       background-color: darkslategrey;
        background-blend-mode: overlay;
        height: 70vh;
        
    }
    
    #buttondiv {
        background-color: gray;
    }
    #invoicediv {
        background-color:  #28231D;
    }
    .emptypage {
        padding: 0;
        width: 100vh; 
        height: 70vh;
        border-color: yellow;
        border-width: 1px;
        border-style: solid;
    }
    .title {
        margin-top: 10px;
        margin-left: auto;
        margin-right: auto;
        padding: 5px;
        border-color: red;
        border-style: solid;
        border-width: 0px;
    }
</style>
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
    .buttonanchor {
    background-color: yellow;
  color: white;
  padding: 14px 25px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
    font-family: Raleway;
}
</style>
<div class="title">
    <h1 style="color: white;">Request Confirmation</h1></div>

<div id="big-container" class="container" >
    <div style="display:flex;">
    <div class="container" id="navopt" style="width:50%; padding:10px">
    
    <ul>
        
<?php
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "techna";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if ($conn -> connect_error){
    die ("Connection failed:". $conn-> connect_error);
}
?>
<h1 style="font-family: Raleway; color: white;">Technician Info</h1>
        <p style="color: white">These are the details of the technician that will be appointed.</p>
       <center> <table class="styled-table">
            <tr class='active-row'>
            <td>Technician Name</td>
            <td>Telephone<br>Number</td>
            <td>Address</td>
            <td >Skills</td>
            </tr>
<?php
$sqlfind = "SELECT technician_name FROM appointment WHERE user_name='$name_session'";
$result = mysqli_query($conn,$sqlfind) or die( mysqli_error($conn));
$row1 = $result->fetch_assoc();
if ($result->num_rows > 0) {
    $techname = $row1['technician_name'];
    $sqlfind2 = "SELECT * FROM techniciantechna WHERE technician_name='$techname'";
    $result2 = mysqli_query($conn,$sqlfind2) or die( mysqli_error($conn));
    $row = mysqli_fetch_field($result2);
    if (!empty($result2) && $result2->num_rows > 0) {
  // output data of each row
  while($row = $result2->fetch_assoc()) {
    echo "<tr><td>" . $row['technician_name'].  "</td><td>" .$row['telnum']. "</td><td>" . $row['address'] . " </td><td>". $row['skills']."</td></center>";
  }
    echo "</table>";
} else {
  echo "<tr><td>No request yet.</td></tr>";
}
}

    ?>
           </table></center>
    </ul>
        
         <?php
       $id=1;
        $sqlupgrade = "SELECT issue FROM appointment where issue LIKE '%Upgrade Service%'";
$resalt = mysqli_query($conn,$sqlupgrade) or die( mysqli_error($conn));
if (!empty($resalt) && $resalt->num_rows > 0){
    echo "<h1 style='font-family: Raleway; color: white;'>Hardware Available</h1>
        <p style='color: white'>It appears you choosed the upgrade service. Please choose your desired hardware to upgrade.</p>
      
    
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
      echo "<tr><td id='hardwarename".$id."'>". $row8['hardware_name']. "</td><td >".$row8['hardware_type']."</td><td>".$row8['hardware_specs']. "</td><td id='hardwarecost".$id."'>". $row8['hardware_cost_show']. "</td><td><button onclick='addCart".$id."()' id='button".$id."'>Add</button></td><td><button id='buttonr".$id."' style='background-color:red' onclick='removeCart".$id."()'>Remove</button></td></tr><input type='hidden' id='costval".$id."' value=".$row8['hardware_cost_value'].">";
          $id=$id+1;
    }
    echo "</table>    
  <center><button id='tek' onclick='techrecommend()'>Or get recommendations by the technician</button></center>";
}
else {
    echo "<p style='color:white'>It appears that your requested services does not apply additional charge such as hardware upgrade etc. Proceed the invoice through online  payment or pay later</p>";
}
 
?>
    </div>
        
    <div class="container" id="navopt" style="width:50%; padding:10px">
   <form id="totaldata" method="post" action="./paid.php?username=$name_session">
    <center><h1 style="font-family: Raleway; color: white;">Invoice</h1><table class="styled-table" id="invoicetable">
            <tr class='active-row'>
            <td>Units</td>
            <td>Cost</td>
            <td>Total</td>
            </tr>
<?php
        $host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "techna";
$total=0;
$id=0;
$units = array();
$costshows = array();
$costvals = array();
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
$sqlfind4 = "SELECT issue FROM appointment WHERE user_name='$name_session'";
$result4 = mysqli_query($conn,$sqlfind4) or die( mysqli_error($conn));
if ($result4->num_rows > 0) {
    $row5 = mysqli_fetch_array($result4);
    $row5_ar = explode(',', $row5[0]);
    
  while($id < (sizeof($row5_ar)-1)) {
      $sqlfind5 = "SELECT * FROM invoiceprice WHERE service='$row5_ar[$id]'";
      $result6 = mysqli_query($conn,$sqlfind5) or die( mysqli_error($conn));
      $row8 = mysqli_fetch_field($result6);
      $row8 = $result6->fetch_assoc();
      echo "<tr><td>". $row5_ar[$id]. "</td><td>".$row8['cost_show']."</td><td>".  "</td></tr>";
      $units[$id] = $row5_ar[$id];
      $costshows[$id] = $row8['cost_show'];
      $costvals[$id] = $row8['cost_value'];
      $id = $id +1;
      $total = $total + $row8['cost_value']; 
  }  
      echo "<input type='hidden' id='total' value='".$total."'>";
}
        else {
  echo "<tr><td>No request yet.</td></tr>";
}
; ?>
    <td style='color=black'><h3>Price</h3></td><td></td><td><input type="hidden" name="totalia"><h3 id="totaling"></h3></td>
<script>

var total = document.getElementById("total").value;
document.getElementById("totaling").innerHTML = "RM" + total;
var decider = 0;
    function techrecommend() {
  var x = document.getElementById("tablehardware");
  if (x.style.display === "none") {
    x.style.display = "block";
    document.querySelector('#tek').textContent= 'Or get recommendations by the technician';
      var row = document.getElementById('row3');
	row.parentElement.removeChild(row);
        var val = 520;
        total=+total - +val;
        document.getElementById("totaling").innerHTML = "RM" + total;
      document.getElementById("totalia").value = total;
  } else {
    x.style.display = "none";
      document.querySelector('#tek').textContent= 'Choose my own Upgrades';
    var table = document.getElementById("invoicetable");
var rowCnt = table.rows.length;
var row = table.insertRow(rowCnt-1);
row.id = "row3";
var val = 520;
// Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
total=+total + +val;
document.getElementById("totaling").innerHTML = "RM" + total;
document.getElementById("totalia").value = total;
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
// Add some text to the new cells:
cell1.innerHTML = '<p id="recommend">Technician Choice</p>';
cell2.innerHTML = '<p id="data6">RM' + val + '</p>';
cell3.innerHTML = '<p id="void1"></p>';
var row = document.getElementById('row2');
	row.parentElement.removeChild(row);
        var val = document.getElementById("costval2").value;
        total=+total - +val;
var row = document.getElementById('row1');
	row.parentElement.removeChild(row);
        var val = document.getElementById("costval1").value;
        total=+total - +val;
        document.getElementById("totaling").innerHTML = "RM" + total;
      document.getElementById("totalia").value = total;
  }
}
        function addCart1() {
decider= 0;
var table = document.getElementById("invoicetable");

var val = document.getElementById("costval1").value;
            // Create an empty <tr> element and add it to the 1st position of the table:
var rowCnt = table.rows.length;
var row = table.insertRow(rowCnt-1);
row.id = "row1"
var data1 = document.getElementById("hardwarename1").textContent;
var data2 = document.getElementById("hardwarecost1").textContent;
// Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
total=+total + +val;
document.getElementById("totaling").innerHTML = "RM" + total;
document.getElementById("totalia").value = total;
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
// Add some text to the new cells:
cell1.innerHTML = data1;
cell2.innerHTML = data2;
cell3.innerHTML = '<p id="void1"></p>';
        if (decider=0){
document.getElementById('button1').removeAttribute("onclick");
            }
            else{
                document.getElementById('button1').setAttribute("onclick");
            }   
        }
    function addCart2() {
decider= 0;
  var table = document.getElementById("invoicetable");

var val = document.getElementById("costval2").value;
            // Create an empty <tr> element and add it to the 1st position of the table:
var rowCnt = table.rows.length;
var row = table.insertRow(rowCnt-1);
row.id = "row2";
var data1 = document.getElementById("hardwarename2").textContent;
var data2 = document.getElementById("hardwarecost2").textContent;
// Insert new cells (<td> elements) at the 1st and 2nd position of the "new" <tr> element:
total=+total + +val;
document.getElementById("totaling").innerHTML = "RM" + total;
document.getElementById("totalia").value = total;
var cell1 = row.insertCell(0);
var cell2 = row.insertCell(1);
var cell3 = row.insertCell(2);
// Add some text to the new cells:
cell1.innerHTML = data1;
cell2.innerHTML = data2;
cell3.innerHTML = '<p id="void2"></p>';
        if (decider=0){
document.getElementById('button2').removeAttribute("onclick");
            }
            else{
                document.getElementById('button2').setAttribute("onclick");
            } 
        return rowCnt;
        return row;
}
    function removeCart2() {
        decider= 1;
        var row = document.getElementById('row2');
	row.parentElement.removeChild(row);
        var val = document.getElementById("costval2").value;
        total=+total - +val;
        document.getElementById("totaling").innerHTML = "RM" + total;
        document.getElementById("totalia").value = total;
        if (decider=1){
document.getElementById('buttonr2').setAttribute("onclick");
            }
            else{
                document.getElementById('buttonr2').setAttribute("onclick");
            }
}
    function removeCart1() {
        decider= 1;
        var row = document.getElementById('row1');
	row.parentElement.removeChild(row);
        var val = document.getElementById("costval1").value;
        total=+total - +val;
        document.getElementById("totaling").innerHTML = "RM" + total;
        if (decider=1){
document.getElementById('buttonr1').setAttribute("onclick");
            }
            else{
                document.getElementById('buttonr1').setAttribute("onclick");
            }
}
</script>
</table><div class="container" id="buttondiv" style="width:50%;">
            <center><button type="submit" style="font-size: 15px;">PAY NOW</button>
                <a class="buttonanchor" href="welcome.php">PAY LATER</a></center></form></div></center>
    </div>
        </div>
  </div>
     <!-- END OF CONTENT-->
</div>
</div>

<div id="wb_links">
<div id="links-overlay"></div>
<div id="links">
<div class="row">
<div class="col-1">
<div id="wb_linksText1">
<span style="color:#FFFFFF;"><strong>Navigate</strong></span>
</div>
<div id="wb_linksMenu1" style="display:inline-block;width:100%;z-index:1;">
<ul id="linksMenu1" role="menubar" class="nav">
<li class="nav-item firstmain"><a role="menuitem" class="nav-link" href="" target="_self">Home</a>
</li>
<li class="nav-item"><a role="menuitem" class="nav-link" href="" target="_self">About</a>
</li>
<li class="nav-item"><a role="menuitem" class="nav-link" href="" target="_self">Services</a>
</li>
<li class="nav-item"><a role="menuitem" class="nav-link" href="" target="_self">Products</a>
</li>
</ul>

</div>
</div>
<div class="col-2">
<div id="wb_linksText2">
<span style="color:#FFFFFF;"><strong>Support</strong></span>
</div>
<div id="wb_linksMenu2" style="display:inline-block;width:100%;z-index:3;">
<ul id="linksMenu2" role="menubar" class="nav">
<li class="nav-item firstmain"><a role="menuitem" class="nav-link" href="#" target="_self">FAQ</a>
</li>
<li class="nav-item"><a role="menuitem" class="nav-link" href="#" target="_self">Knowledge&nbsp;Base</a>
</li>
<li class="nav-item"><a role="menuitem" class="nav-link" href="#" target="_self">Community&nbsp;Forum</a>
</li>
<li class="nav-item"><a role="menuitem" class="nav-link" href="#" target="_self">Video&nbsp;Tutorials</a>
</li>
</ul>

</div>
</div>
<div class="col-3">
<div id="wb_linksText3">
<span style="color:#FFFFFF;"><strong>Follow Us</strong></span>
</div>
<div id="wb_linksMenu3" style="display:inline-block;width:100%;z-index:5;">
<ul id="linksMenu3" role="menubar" class="nav">
<li class="nav-item firstmain"><a role="menuitem" class="nav-link" href="" target="_self">Facebook</a>
</li>
<li class="nav-item"><a role="menuitem" class="nav-link" href="" target="_self">Instagram</a>
</li>
<li class="nav-item"><a role="menuitem" class="nav-link" href="" target="_self">Twitter</a>
</li>
<li class="nav-item"><a role="menuitem" class="nav-link" href="" target="_self">YouTube</a>
</li>
</ul>

</div>
</div>
<div class="col-4">
<div id="wb_linksText4">
<span style="color:#FFFFFF;"><strong>Company</strong></span>
</div>
<div id="wb_linksMenu4" style="display:inline-block;width:100%;z-index:7;">
<ul id="linksMenu4" role="menubar" class="nav">
<li class="nav-item firstmain"><a role="menuitem" class="nav-link" href="#" target="_self">About</a>
</li>
<li class="nav-item"><a role="menuitem" class="nav-link" href="#" target="_self">Careers</a>
</li>
<li class="nav-item"><a role="menuitem" class="nav-link" href="#" target="_self">Press&nbsp;Kit</a>
</li>
<li class="nav-item"><a role="menuitem" class="nav-link" href="#" target="_self">Contact</a>
</li>
</ul>

</div>
</div>
</div>
</div>
</div>
<div id="wb_footer">
<div id="footer">
<div class="row">
<div class="col-1">
<div id="wb_footerText">
<span style="color:#787878;">Copyright © 2020 TECHNA FIKRI ARIF BIN AZMAN</span>
</div>
</div>
</div>
</div>
</div>
</body>
</html>