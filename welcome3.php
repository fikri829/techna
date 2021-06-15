<?php
   include('session.php');
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
<li style="float:right;"><a role="menuitem" href=""><i class="fa fa-user fa-2x">&nbsp;</i><br>About</a></li>
</ul>
    
    <!--CONTENT HERE-->
    
<div style="text-align: center;">
       <h1>HELLO!</h1>
           </div>
         <div id="embedMap" style=" margin-top: 10px; margin-bottom: 10px;display: flex; justify-content: center;">
        <!--Google map will be embedded here-->
             <div style="width: 400px; height: 300;" id="map"></div>
                  <script>
      var map;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 8
        });
      }
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCuOPiDVgcuh43u8k7ZWhP6k7fJv_HaJW4&callback=initMap"
    async defer></script>
    
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
</table>
</div>
</section>
             </section>
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