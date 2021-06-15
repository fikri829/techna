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
<style>
    .container{
        border-color: yellow;
        border-width: 0px;
        border-style: solid;
        
    }
    
    #big-container{
        margin: auto;
        width: 50%;
        border: 0px solid green;
        padding: 10px;
        display: flex;
        width: 100vh;
        align-content: center;
    }
    
    #navoptmenu1, #navoptmenu2, #navoptmenu3, #navoptmenu4, #navoptmenu5 {
        display: block;
        width: 60px;
    }
    
    #navopt {
        list-style-type: none;
        padding: 0;
        width: 120px;
        height: 70vh;
        
    }
    
    .emptypage {
        padding: 0;
        width: 100vh; 
        height: 70vh;
        border-color: yellow;
        border-width: 0px;
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
<div class="title">
    <h1 style="color: white;">User Dashboard</h1></div>

<div id="big-container" class="container">
   <div id="navopt" class="container">
    <ul id="navopt">
       <li><a onclick="showPageRequestRepair(this);" id="navoptmenu1">Request Repair</a></li>
       <li><a id="navoptmenu2" onclick="showPageRequestStatus(this);" id="navoptmenu">Request Status</a>
        <li><a id="navoptmenu3" href="paidchecker.php">Payment</a></li>
       <li><a id="navoptmenu4">Status History</a></li>
       <li><a id="navoptmenu5">User Profile</a></li>
       </ul>
    </div>
    <div class="emptypage">
    <embed id="embedpage" type="text/html" src="./requestrepair.php" style="width: 100%;
            height: 100%;">
</div>
</div>
    <script type="text/javascript">
        
    function showPageRequestRepair(whichpage){
  var source=whichpage.getAttribute("href");
  var page=document.getElementById("embedpage");
  var clone=page.cloneNode(true);
  clone.setAttribute('src', 'requestrepair.php');
  page.parentNode.replaceChild(clone,page)
}
    function showPageRequestStatus(whichpage){
  var source=whichpage.getAttribute("href");
  var page=document.getElementById("embedpage");
  var clone=page.cloneNode(true);
  clone.setAttribute('src', 'requeststatus.php');
  page.parentNode.replaceChild(clone,page)
}
</script>
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