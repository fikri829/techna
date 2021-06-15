<?php
   include('admin_session.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin_main.css">
    <script>
    function showPosition() {
        if(navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                var positionInfo = "Your current position is (" + "Latitude: " + position.coords.latitude + ", " + "Longitude: " + position.coords.longitude + ")";
                document.getElementById("result").innerHTML = positionInfo;
            });
        } else {
            alert("Sorry, your browser does not support HTML5 geolocation.");
        }
    }
</script>
    <title>Welcome</title>
</head>
   <body>
 <!--THE TOP SECTION-->
    <section class="UpperSection">
        <div class="navbar">

            <ul class="navmenu">
                <li class="navbar"><span id="homewelcome" style="font-size : 2em; text-align : center;">Welcome</span><span id="homewelcome"><?php echo $user_check; ?></span></li>
                <li><a href=#>Contact Us</a></li>
                <li><a href=#>About Us</a></li>
                <li><a href="admin_logout.php" style="background-color : #000000; ">Logout</a></li>
            </ul>
        </div>
    </section>
  <!--THE CONTENT-->
        <section class="MiddleSection" style="margin-top: -2em;">

        <div class="content" style="display: flex">
            <div style="text-align: center; width: 400px; height: 300;">
                 <a href="view_database.php">
            <img src="img/placeholder1.jpg">
            <h2>Users Database</h2>
                </a>
                 </div>
            <div style="text-align: center; width: 400px; height: 300;">
                <a href="hardwarelist_request.php">
            <img src="img/manuicon.png" style="height: 170px; width: 300px">
            <h2>Hardware request</h2>
                </a>
                                <div class="logobuild">
            <a href="./view_database_manufacturers.php"><h2>Manufacturer's list</h2></a>
            </div>
                 </div>
        </div>
</section>
   <footer class="footer">
        <h3>Copyright Techna 2020.</h3>
</footer>
</body>
   
</html>